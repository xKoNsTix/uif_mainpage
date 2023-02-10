// Replace this with your actual API key
var API_KEY = 'YOUR_API_KEY';

// Replace this with your calendar ID
var CALENDAR_ID = 'YOUR_CALENDAR_ID';

// The URL for the Google Calendar API
var API_URL = 'https://www.googleapis.com/calendar/v3/calendars/' + CALENDAR_ID + '/events?key=' + API_KEY;

// The element where the events will be displayed
var eventsElement = document.getElementById('events');

// Make a request to the API
var xhr = new XMLHttpRequest();
xhr.open('GET', API_URL, true);
xhr.onreadystatechange = function() {
  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    // Parse the response
    var events = JSON.parse(xhr.responseText).items;

    // Loop through the events
    for (var i = 0; i < events.length; i++) {
      // Get the event data
      var event = events[i];
      var title = event.summary;
      var start = event.start.dateTime || event.start.date;
      var description = event.description;

      // Create the HTML for the event
      var eventHTML = '<li>' +
        '<h2>' + title + '</h2>' +
        '<p>' + start + '</p>' +
        '<p>' + description + '</p>' +
        '</li>';

      // Add the event to the list
      eventsElement.innerHTML += eventHTML;
    }
  }
};
xhr.send();
``
