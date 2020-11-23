import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function Stories3() {
    return (
        <div className="">
          <p><strong>Maria Neri</strong></p>
        </div>
    );
}


export default Stories3;


if (document.getElementById('stories3')) {
    ReactDOM.render(<Stories3 />, document.getElementById('stories3'));
}
