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

function NewPost() {
  var day = moment().format('D/M h:mm');
  var day2 = moment().subtract(1, 'hours').format('D/M h:mm');
  $(".time").append(day2);
    return (
        <div className="post">
          <p><strong>Mario Rossi</strong></p>
          <p>Buongiorno a tutti amici! Oggi è una bellissima giornata!</p>
          <p className="day-post"> </p>
        </div>
    );
}


export default NewPost;


if (document.getElementById('newpost')) {
    ReactDOM.render(<NewPost />, document.getElementById('newpost'));
}
