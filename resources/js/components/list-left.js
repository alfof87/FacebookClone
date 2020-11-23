import React from 'react';
import ReactDOM from 'react-dom';

import '../.././sass/app.scss';

function ListLeft() {
    return (
        <div className="">
          <div>
            <a href="#">
             <i class="fas fa-notes-medical"></i>
             COVID-19
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-bookmark"></i>
             Pagine
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-user-friends"></i>
             Amici
            </a>
          </div>
          <div className="line"></div>
            <strong>
              I tuoi collegamenti rapidi
            </strong>
          <div>
            <a href="#">
             <i class="fas fa-utensils"></i>
             Cucina dal Mondo
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-futbol"></i>
              Sport che passione
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-calendar-check"></i>
             Eventi
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-gamepad"></i>
             Giochi
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-film"></i>
             Film
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-cloud-sun-rain"></i>
             Meteo
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-briefcase"></i>
             Offerte di lavoro
            </a>
          </div>
          <div>
            <a href="#">
             <i class="fas fa-video"></i>
             Video Live
            </a>
          </div>
        </div>

    );
}


export default ListLeft;


if (document.getElementById('list-left')) {
    ReactDOM.render(<ListLeft />, document.getElementById('list-left'));
}
