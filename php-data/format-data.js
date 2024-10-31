import fs from 'fs';
import util from "util";
import path from 'path';
import Ajv from 'ajv';

const SCRIPT_FOLDER = "php-data";

const DAYS = ['2024-11-06', '2024-11-07'];
const destFolder = "public";
const destFile = "eventsData.json";
const schemaPath = path.join(SCRIPT_FOLDER, "schema.json");
const schema = JSON.parse(fs.readFileSync(schemaPath));

function print(object) {
    console.log(util.inspect(object, false, null, true));
}

const rdataPath = path.join(SCRIPT_FOLDER, 'data.json');
const rdata = fs.readFileSync(rdataPath, 'utf8');
const data = JSON.parse(rdata);

const templatePath = path.join(SCRIPT_FOLDER,"schedule-template.json");
const template = JSON.parse(fs.readFileSync(templatePath, 'utf8')).data;

DAYS.forEach((date, i) => {
    template[i].date = date;
});

let nextTalk = 0;

template.forEach((day, i) => {
    day.schedule.forEach((event) => {
        switch (event.type) {
            case "keynote":
                event.title = data.keynotes[i].title
                event.speakers = [];
                if (data.keynotes[i].a1) {
                    event.speakers.push({
                        name: data.keynotes[i].a1.name,
                        affiliation: data.keynotes[i].a1.company
                    });
                }
                if (data.keynotes[i].a2) {
                    event.speakers.push({
                        name: data.keynotes[i].a2.name,
                        affiliation: data.keynotes[i].a2.company
                    });
                }
                break;
            case "talk":
                const talk = data.talks[nextTalk];
                event.title = talk.title;
                event.speakers = [];
                if (talk.a1) {
                    event.speakers.push({
                        name: talk.a1.name,
                        affiliation: talk.a1.company,
                    });


                }
                if (talk.a2) {
                    event.speakers.push({
                        name: talk.a2.name,
                        affiliation: talk.a2.company,
                    });
                }
                nextTalk += 1;
                break;
            case "break":
            case "other":
            default:
                break;
        }
    });
});



const dataExport = {
    data: template,
}

const ajv = new Ajv()
ajv.addFormat("date", {
    validate: (date) => {
        const regex = /^\d{4}-\d{2}-\d{2}$/; // YYYY-MM-DD
        return regex.test(date) && !isNaN(new Date(date).getTime()); 
    },
});
const validator = ajv.compile(schema)
const valid = validator(dataExport);

if (valid) {
    fs.writeFileSync(path.join(destFolder, destFile), JSON.stringify(dataExport));
} else {
    console.error("Malformed data after formatting.");
}
