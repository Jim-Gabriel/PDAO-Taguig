<!-- DASHBOARD -->

<div class="dashboard-container">
        <div id="dashboardSection">
          <div class="col-12 p-4 pt-4 fs-2 fw-semibold">DASHBOARD</div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-3 column-size">
                <div class="card w-100 text-white p-3 rounded-3 shadow-sm"
                  style="background-color: #1E4499; position: relative;">
                  <h5>New Applicants</h5>
                  <h4 class="fs-5">100</h4>
                  <h6>Click here to view ></h6>
                  <img src="<?php echo ROOT_ASSETS . 'images/new-applicant.png' ?>" alt="icon"
                    class="card-icon">
                </div>
              </div>
              <div class="col-12 col-lg-3 column-size">
                <div class="card w-100  text-white p-3 rounded-3 shadow-sm"
                  style="background-color: #5a7499; position: relative;">
                  <h5>Renewal</h5>
                  <h4 class="fs-5">100</h4>
                  <h6>Click here to view ></h6>
                  <img src="<?php echo ROOT_ASSETS . 'images/renewal.png' ?>" alt="icon" class="card-icon">
                </div>
              </div>
              <div class="col-12 col-lg-3 column-size">
                <div class="card w-100  text-white p-3 rounded-3 shadow-sm"
                  style="background-color: #c9a449; position: relative;">
                  <h5>Pending</h5>
                  <h4 class="fs-5">100</h4>
                  <h6>Click here to view ></h6>
                  <img src="<?php echo ROOT_ASSETS . 'images/pending.png' ?>" alt="icon" class="card-icon">

                </div>
              </div>
              <div class="col-12 col-lg-3 column-size">
                <div class="card w-100  text-white p-3 rounded-3 shadow-sm"
                  style="background-color: #ac2e28; position: relative;">
                  <h5>Declined</h5>
                  <h4 class="fs-5">100</h6>
                  <h6>Click here to view ></h6>
                  <img src="<?php echo ROOT_ASSETS . 'images/declined.png' ?>" alt="icon" class="card-icon">

                </div>
              </div>
            </div>
          </div>

          <!--DASHBOARD CHARTS-->

          <div class="container ">
            <div class="row">
              <div class="col-md-4">
                <span class="ps-2 fs-4">Gender</span>
                <div class="chart p-2 py-3 m-1 rounded-4 shadow-lg">
                  <canvas id="genderPieChart" class="w-100 h-100"></canvas>
                </div>
              </div>
              <div class="col-md-8">
                <span class="ps-2 fs-4">Members</span>
                <div
                  class="chart2 p-2 m-1 rounded-4 shadow-lg position-relative">
                  <canvas id="membersLineChart" class="w-100 h-100"></canvas>
                  <div class="dropdown"
                    style="position: absolute; top: 10px; right: 10px;">
                    <button class="btn btn-secondary dropdown-toggle"
                      type="button" id="dropdownMenuButton"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Filter
                    </button>
                    <ul class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#"
                          id="filterYearly">Yearly</a></li>
                      <li><a class="dropdown-item" href="#"
                          id="filterMonthly">Monthly</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 pt-4">
                <span class="ps-2 fs-4">Applicants</span>
                <div class="chart3 p-2 m-1 rounded-4 shadow-lg">
                  <canvas id="newApplicantsLineChart"
                    class="w-100 h-100"></canvas>
                </div>
                <div class="row">
                  <div class="col-md-12 pt-4">
                    <span class="ps-2 fs-4">Renewal</span>
                    <div class="chart4 p-2 m-1 rounded-4 shadow-lg">
                      <canvas id="renewalLineChart"
                        class="w-100 h-100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>