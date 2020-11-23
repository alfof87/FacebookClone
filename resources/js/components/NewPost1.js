import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';
// import logo from './user1.png'; // Tell webpack this JS file uses this image
//
// console.log(logo); // /logo.84287d09.png
// var moment = moment().format('dddd D MMMM YYYY');
// console.log(moment);
var moment = require('moment');

// console.log(moment().format('dddd D MMMM YYYY'));

function NewPost1() {
  var day = moment().format('D/M h:mm');
  $("#time").append(day);
    return (
        <div className="post">
          <p><strong>Roberto de Angelis</strong></p>
          <p>Un uomo entra in un caffe. Ma nota che manca l’accento, così con un pennarello gigante aggiunge l’accento mancante. E se ne va… Caffè corretto.</p>
          <p className="day-post"> </p>
        </div>
    );
}


export default NewPost1;


if (document.getElementById('newpost1')) {
    ReactDOM.render(<NewPost1 />, document.getElementById('newpost1'));
}
