import './style.css'
import { loadEventData, updateEvents } from '../src/schedule';



async function main() {
  
  // For testing only
  const testing = true;
  const refDate = new Date("2023-11-02 14:30");

  const dataFile = './public/eventsData.json';

  const eventsData = await loadEventData(dataFile);
  console.log(eventsData);
  updateEvents(eventsData, refDate, testing);

  setInterval(() => updateEvents(eventsData, refDate, testing), 1000 * 60);  // Mise à jour toutes les minutes
  
}

main();



//updateEvents();  // Appel initial
