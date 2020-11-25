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

function NewPost2() {
  var day = moment().format('D/M h:mm');
  var day2 = moment().subtract(3, 'hours').format('D/M h:mm');
  $(".time2").append(day2);
    return (
        <div className="post">
          <p><strong>Maria Neri</strong></p>
          <div className="post-img"></div>
          <p className="day-post"> </p>
        </div>
    );
}


export default NewPost2;


if (document.getElementById('newpost2')) {
    ReactDOM.render(<NewPost2 />, document.getElementById('newpost2'));
}
