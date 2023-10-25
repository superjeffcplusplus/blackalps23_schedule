import './style.css'
import { loadEventData, updateEvents } from './src/schedule';



async function main() {

  // For testing only
  const testing = true;
  const refDate = new Date("2023-11-02 11:02");

  const dataFile = './eventsData.json';

  const eventsData = await loadEventData(dataFile);

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

  console.log(eventsData);

  updateEvents(eventsData, refDate, testing);

  setInterval(() => updateEvents(eventsData, refDate, testing), 1000  * 60);  // Mise à jour toutes les minutes


}

main();



//updateEvents();  // Appel initial
