import './style.css'
import { loadJSON, updateChrono, updateEvents } from './src/schedule';



async function main() {

  // For testing only
  let testing = false;
  let rate = 1; // x faster than real time
  let refTime = new Date();

  const dataFile = './eventsData.json';
  const configFile = './config.json';

  const configData = await loadJSON(configFile);
  let eventsData = await loadJSON(dataFile);
  eventsData = eventsData.data;
  const showTime = configData.show_time;

  if (configData.mode === 'test') {
    console.log('Testing mode activated');
    testing = true;
    refTime = new Date(configData.mock_date);
    rate = configData.test_rate;
    console.log(`Test date: ${refTime}`);
  }

  // Add a timestamp to each event for easier comparison
  eventsData.forEach(element => {
    const dateStr = element.date;
    element.schedule.forEach(element => {
      element.start_stamp = new Date(`${dateStr} ${element.time.start}`).getTime();
    });
  });

  // Sort events by date
  eventsData.forEach(element => {
    element.schedule.sort((a, b) => a.start_stamp - b.start_stamp);
  });



  updateEvents(eventsData, refTime);
  if (showTime === true)
    updateChrono(refTime);

  console.log(rate);
  setInterval(() => {

    if (testing === true) {
      refTime = new Date(refTime.getTime() + 1000 * 60);
    } else {
      refTime = new Date();
    }
    
    if (showTime === true) {
      updateChrono(refTime);
    }

    updateEvents(eventsData, refTime);

  }, 1000 * 60 / rate);  // Mise à jour toutes les minutes


}

main();
