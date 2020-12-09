import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

var moment = require('moment');

function TimePost() {
  var day = moment().format('D/M h:mm');
  var day2 = moment().subtract(1, 'hours').format('D/M h:mm');

    return (
        $(".timepost").append(day2);
    );
}


export default TimePost;


if (document.getElementById('timepost')) {
    ReactDOM.render(<TimePost />, document.getElementById('timepost'));
}
