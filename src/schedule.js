import { areSameDay } from "./utils";

/**
 * This function is used to load the data from the JSON file.
 * @returns {Promise} A promise that resolves with the data from the JSON file.
 */
export async function loadJSON(dataFile) {
  return fetch(dataFile)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network error');
      }
      return response.json();
    })
    .catch(error => {
      console.error("Il y a eu un problème lors de la récupération du fichier JSON", error);
    });
}

export function updateChrono(refTime) {
  const formatter = new Intl.DateTimeFormat('fr-FR', {
    year: 'numeric',
    month: '2-digit',
    day: '2-digit',
    hour: '2-digit',
    minute: '2-digit'
  });
  const formattedDate = formatter.format(refTime);
  let chrono = document.querySelector('.chrono');
  chrono.innerText = "";
  chrono.innerText = formattedDate;
}

/**
 * This function is used to update the events displayed on the screen.
 * @param {Object} eventsData The data from the JSON file.
 * @param {Date} refTime The reference date to use for testing.
 * @param {boolean} testing A boolean to indicate if we are in testing mode.
 */
export function updateEvents(eventsData, refTime) {

  if (eventsData.length === 0) {
    return;
  }

  let currentTime = refTime.getTime(); // in ms

  let todayEvents = null;
  let todayStr = null;

  let currentEvent = null;
  let currentEndTime = null;
  let nextEvent = null;
  const remainingEvents = [];

  for (const e of eventsData) {
    if (areSameDay(refTime, new Date(e.date))) {
      todayStr = e.date;
      todayEvents = e.schedule;
    }
  }

  if (todayEvents === null) {
      todayStr = eventsData[0].date;
      todayEvents = eventsData[0].schedule;
  }

  if (todayEvents[0].start_stamp > currentTime) {
    currentEvent = todayEvents[0];
    nextEvent = todayEvents[1];
    remainingEvents.push(...todayEvents.slice(2));
  } else {
    for (const e of todayEvents) {
      let startTime = new Date(`${todayStr} ${e.time.start}`).getTime();
      let endTime = new Date(`${todayStr} ${e.time.end}`).getTime();
      if (currentTime >= startTime && currentTime <= endTime) {
        currentEvent = e;
        currentEndTime = endTime;
      } else if (startTime === currentEndTime) {
        nextEvent = e;
      } else if (nextEvent !== null && startTime > new Date(`${todayStr} ${nextEvent.time.start}`).getTime()) {
        remainingEvents.push(e);
      }
    }
  }

  const currentDomElem = document.querySelector('.current');
  currentDomElem.querySelector('.event').innerText = "";
  currentDomElem.querySelector('.schedule').innerText = "";
  currentDomElem.querySelector('.speakers').innerText = "";

  if (currentEvent === null) {
    return;
  }

  currentDomElem.querySelector('.event').innerText = currentEvent ? currentEvent.title : "";
  currentDomElem.querySelector('.schedule').innerText = currentEvent ? `${currentEvent.time.start} - ${currentEvent.time.end}` : "";
  if (currentEvent.speakers) {
    for (let i = 0; i < currentEvent.speakers.length; i++) {
      const speaker = currentEvent.speakers[i];
      currentDomElem.querySelector('.speakers').innerHTML += `${speaker.name}`;
      if (i !== currentEvent.speakers.length - 1) {
        currentDomElem.querySelector('.speakers').innerHTML += ', ';
      }
    }
  }

  const nextDomElem = document.querySelector('.next');
  nextDomElem.querySelector('.event').innerText = "";
  nextDomElem.querySelector('.schedule').innerText = "";
  nextDomElem.querySelector('.speakers').innerText = "";

  if (nextEvent === null) {
    return;
  }

  nextDomElem.querySelector('.event').innerText = nextEvent ? nextEvent.title : "";
  nextDomElem.querySelector('.schedule').innerText = nextEvent ? `${nextEvent.time.start} - ${nextEvent.time.end}` : "";
  if (nextEvent.speakers) {
    for (let i = 0; i < nextEvent.speakers.length; i++) {
      const speaker = nextEvent.speakers[i];
      nextDomElem.querySelector('.speakers').innerHTML += `${speaker.name}`;
      if (i !== nextEvent.speakers.length - 1) {
        nextDomElem.querySelector('.speakers').innerHTML += ', ';
      }
    }
  }


  let remainingDomElem = document.querySelector('.remaining');
  remainingDomElem.innerHTML = "";

  // Keep the 6 fisrt events
  remainingEvents.splice(6);

  for (let e of remainingEvents) {
    const newNode = document.createElement('div');
    newNode.className = 'event';
    newNode.innerHTML = `<div class="schedule">${e.time.start}</div><div class="title">${e.title}</div>`;
    remainingDomElem.appendChild(newNode);
  }

}