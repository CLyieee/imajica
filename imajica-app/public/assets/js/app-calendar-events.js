let date = new Date;
let nextDay = new Date((new Date).getTime() + 864e5);
let nextMonth = date.getMonth() === 11 ? new Date(date.getFullYear() + 1, 0, 1) : new Date(date.getFullYear(), date.getMonth() + 1, 1);
let prevMonth = date.getMonth() === 11 ? new Date(date.getFullYear() - 1, 0, 1) : new Date(date.getFullYear(), date.getMonth() - 1, 1);
window.events = [{id: 1, url: "", title: "Booking 7", start: date, end: nextDay, allDay: false, extendedProps: {calendar: "Business"}}, {id: 2, url: "", title: "Booking 5", start: new Date(date.getFullYear(), date.getMonth() + 1, -11), end: new Date(date.getFullYear(), date.getMonth() + 1, -10), allDay: true, extendedProps: {calendar: "Business"}}, {id: 3, url: "", title: "Booking 6", allDay: true, start: new Date(date.getFullYear(), date.getMonth() + 1, -9), end: new Date(date.getFullYear(), date.getMonth() + 1, -7), extendedProps: {calendar: "Holiday"}}, {id: 4, url: "", title: "Booking 4", start: new Date(date.getFullYear(), date.getMonth() + 1, -11), end: new Date(date.getFullYear(), date.getMonth() + 1, -10), extendedProps: {calendar: "Personal"}}, {id: 5, url: "", title: "Dart Game?", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -12), allDay: true, extendedProps: {calendar: "ETC"}}, {id: 6, url: "", title: "Booking 2", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -12), allDay: true, extendedProps: {calendar: "Personal"}}, {id: 7, url: "", title: "Booking 1", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -12), extendedProps: {calendar: "Family"}}, {id: 8, url: "", title: "Booking 3", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -12), allDay: true, extendedProps: {calendar: "Business"}}, {id: 9, url: "", title: "Booking 8", start: nextMonth, end: nextMonth, allDay: true, extendedProps: {calendar: "Business"}}, {id: 10, url: "", title: "Monthly Checkup", start: prevMonth, end: prevMonth, allDay: true, extendedProps: {calendar: "Personal"}}];
