<!-- Sidebar -->
<div id="sidebar"
        class="d-flex flex-column flex-shrink-0 p-3 bg-dark-subtle rounded-end-2 shadow-sm">
        <ul class="nav nav-pills flex-column mb-auto mt-1">
          <li>
            <a href="<?= ROOT_URL .'/dashboard';?>" id="dashboardLink"
              class="nav-link link-body-emphasis py-3 border-bottom rounded-0 fs-5">
              <svg class="bi pe-none me-2 icon" width="20" height="20">
                <use xlink:href="#speedometer2" />
              </svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="<?= ROOT_URL .'/applicants';?>" id="applicantsLink"
              class="nav-link link-body-emphasis py-3 border-bottom rounded-0 fs-5">
              <svg class="bi pe-none me-2 icon" width="20" height="20">
                <use xlink:href="#person-fill-add" />
              </svg>
              Applicants
            </a>
          </li>
          <li>
            <a href="#" id="membersLink"
              class="nav-link link-body-emphasis py-3 border-bottom rounded-0 fs-5">
              <svg class="bi pe-none me-2 icon" width="20" height="20" role="img"
                aria-label="Members">
                <use xlink:href="#person-fill-check"></use>
              </svg>
              Members
            </a>
          </li>
          <li>
            <a href="#" id="usersLink"
              class="nav-link link-body-emphasis py-3 border-bottom rounded-0 fs-5">
              <svg class="bi pe-none me-2 icon" width="20" height="20">
                <use xlink:href="#people-fill" />
              </svg>
              Users
            </a>
          </li>
        </ul>
        <hr>
      </div>
      <button id="collapseButton"
        class="btn btn-sm btn-light shadow-sm ms-3 mt-2" type="button">
        <svg class="bi" width="20" height="20" role="img" aria-label="Menu">
          <use xlink:href="#grid"></use>
        </svg>
      </button>

      <!-- Collapsed Sidebar -->
      <div id="collapsedSidebar" class="d-none">
        <div class="d-flex flex-column flex-shrink-0 bg-dark-subtle"
          style="width: 4.5rem; height: 100%;">
          <!-- <button id="expandButton" class="btn btn-sm btn-primary" type="button">Expand</button> -->
          <ul
            class="nav nav-pills nav-flush flex-column mb-auto text-center mt-4">
            <li class="nav-item">
              <a href="#" id="dashboardLinkIcon" class="nav-link py-3 border-bottom rounded-0"
                title="Dashboard" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none icon" width="20" height="20" role="img"
                  aria-label="Dashboard">
                  <use xlink:href="#speedometer2" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" id="applicantsLinkIcon" class="nav-link py-3 border-bottom rounded-0"
                title="Applicants" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none icon" width="20" height="20" role="img"
                  aria-label="Applicants">
                  <use xlink:href="#person-fill-add" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" id="membersLinkIcon" class="nav-link py-3 border-bottom rounded-0"
                title="Members" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none icon" width="20" height="20" role="img"
                  aria-label="Members">
                  <use xlink:href="#person-fill-check" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" id="usersLinkIcon" class="nav-link py-3 border-bottom rounded-0"
                title="Users" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none icon" width="20" height="20" role="img"
                  aria-label="Users">
                  <use xlink:href="#people-fill" />
                </svg>
              </a>
            </li>
          </ul>
          <div class="dropdown border-top"></div>
        </div>
      </div>