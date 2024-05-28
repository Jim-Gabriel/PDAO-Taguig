document.addEventListener("DOMContentLoaded", function () {
  const dashboardLink = document.querySelector("#dashboardLink" , "#dashboardLinkIcon");
  const applicantsLink = document.querySelector("#applicantsLink", "#applicantsLinkIcon");
  const membersLink = document.querySelector("#membersLink" , "#membersLinkIcon");

  const dashboardSection = document.querySelector("#dashboardSection");
  const applicantsSection = document.querySelector("#applicantsSection");
  const membersSection = document.querySelector("#membersSection");
  const applicantDetailsSection = document.querySelector("#applicantDetailsSection");

  applicantsSection.style.display = "none";
  membersSection.style.display = "none";
  applicantDetailsSection.style.display = "none";

  dashboardLink.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(dashboardSection);
  });

  applicantsLink.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(applicantsSection);
  });

  membersLink.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(membersSection);
  });
  
  dashboardLinkIcon.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(dashboardSection);
  });

  applicantsLinkIcon.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(applicantsSection);
  });

  membersLinkIcon.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSectionVisibility(membersSection);
  });

  function toggleSectionVisibility(section) {
    const allSections = [dashboardSection, applicantsSection, membersSection, applicantDetailsSection];
    allSections.forEach((s) => {
      if (s === section) {
        s.style.display = "block";
      } else {
        s.style.display = "none";
      }
    });
  }

  const applicantNames = document.querySelectorAll(".applicant-name"); // Assuming applicant names have this class
  applicantNames.forEach((name) => {
    name.addEventListener("click", function () {
      toggleSectionVisibility(applicantDetailsSection);
      // Fetch and display applicant details based on the clicked name
      // Example: loadApplicantDetails(name.dataset.applicantId);
    });
  });

  function showCommentBox(status) {
    const commentBox = document.getElementById("commentBox");
    commentBox.style.display = "block";
    commentBox.querySelector("label").textContent = `Comments (${status}):`;
  }

  function hideCommentBox() {
    const commentBox = document.getElementById("commentBox");
    commentBox.style.display = "none";
  }
});


document.addEventListener('DOMContentLoaded', function() {
  const sidebar = document.getElementById('sidebar');
  const collapsedSidebar = document.getElementById('collapsedSidebar');
  const dashboardContainer = document.querySelector('.dashboard-container');
  const applicantsContainer = document.querySelector('.applicants-container');
  const membersContainer = document.querySelector('.members-container');
  const collapseButton = document.getElementById('collapseButton');
 
  
  collapseButton.addEventListener('click', function() {
    if (!collapsedSidebar.classList.contains('d-none')) {
      // Sidebar is collapsed, so expand it
      sidebar.style.transform = 'translateX(0)';
      collapsedSidebar.classList.add('d-none');
      dashboardContainer.style.marginLeft = '280px';
      applicantsContainer.style.marginLeft = '280px';
      membersContainer.style.marginLeft = '280px';
      collapseButton.style.transition = 'left 0.3s';
      collapseButton.style.left = '250px';
    } else {
      // Sidebar is expanded, so collapse it
      sidebar.style.transform = 'translateX(-100%)';
      collapsedSidebar.classList.remove('d-none');
      dashboardContainer.style.marginLeft = '4.5rem';
      applicantsContainer.style.marginLeft = '4.5rem';
      membersContainer.style.marginLeft = '4.5rem';
      collapseButton.style.transition = 'left 0.3s';
      collapseButton.style.left = '40px';
    }
  });

});


