import fs from 'fs';
import util from "util";

const DAYS = ['2024-11-06', '2024-11-07'];

function print(object) {
    console.log(util.inspect(object, false, null, true));
}


const rdataPath = 'data.json'
const rdata = fs.readFileSync(rdataPath, 'utf8');
const data = JSON.parse(rdata)

const templatePath = "schedule-template.json"
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
    $schema: "./schema.json",
    data: template,
}

fs.writeFileSync("data-export.json", JSON.stringify(dataExport));