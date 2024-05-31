<!-- APPLICANT DETAILS FORM -->
<div id="applicantDetailsSection" class="p-4 bg-light rounded shadow-lg"
        style="display: none;">
        <h2 class="mb-4">Applicant Details</h2>

        <form>
          <div class="d-flex justify-content-between">
            <div>
              <h4>Buong Pangalan (Full Name)</h4>
              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="surname" class="form-label">Apilyedo
                    (Surname):</label>
                  <input type="text" class="form-control" id="surname"
                    name="surname" required>
                </div>
                <div class="col-md-4">
                  <label for="name" class="form-label">Pangalan
                    (Name):</label>
                  <input type="text" class="form-control" id="name"
                    name="name" required>
                </div>
                <div class="col-md-4">
                  <label for="middleName" class="form-label">Gitnang Pangalan
                    (Middle Name):</label>
                  <input type="text" class="form-control" id="middleName"
                    name="middleName">
                </div>
                <div class="col-md-4 mt-3">
                  <label for="nameExtension" class="form-label">Pangalang
                    Dugtong (Name Extension):</label>
                  <input type="text" class="form-control" id="nameExtension"
                    name="nameExtension">
                </div>
                <div class="col-md-4 mt-3">
                  <label for="idNumber" class="form-label">ID Number:</label>
                  <input type="text" class="form-control" id="idNumber"
                    name="idNumber" required>
                </div>
              </div>
            </div>
            <div>
              <label for="applicantPhoto" class="form-label">Applicant
                Photo:</label>
              <div class="mb-3">
                <div id="photoBox" class="img-thumbnail"
                  style="width: 100px; height: 100px; background-color: #f0f0f0;">
                  <img id="photoPreview" src="#" alt="Applicant Photo"
                    style="width: 100%; height: 100%;">
                </div>
              </div>
            </div>
          </div>

          <h4>Tirahan (Address)</h4>
          <div class="row mb-3">
            <div class="col-md-3">
              <label for="houseNumber" class="form-label">House
                #/Block/Lot:</label>
              <input type="text" class="form-control" id="houseNumber"
                name="houseNumber">
            </div>
            <div class="col-md-3">
              <label for="street" class="form-label">Street:</label>
              <input type="text" class="form-control" id="street"
                name="street">
            </div>
            <div class="col-md-3">
              <label for="subdivision"
                class="form-label">Subdivision/Village:</label>
              <input type="text" class="form-control" id="subdivision"
                name="subdivision">
            </div>
            <div class="col-md-3">
              <label for="barangay" class="form-label">Barangay:</label>
              <select class="form-select" id="barangay" name="barangay">
                <option selected>Pumili ng Barangay</option>
                <!-- Add more barangay options here -->
              </select>
            </div>
            <div class="col-md-3 mt-3">
              <label for="city" class="form-label">Lungsod (City):</label>
              <input type="text" class="form-control" id="city" name="city"
                value="Taguig City" readonly>
            </div>
          </div>

          <h4>Ibang Impormasyon (Other Information)</h4>
          <div class="row mb-3">
            <div class="col-md-4">
              <label for="disability" class="form-label">Uri ng Kapansanan
                (Type of Disability):</label>
              <input type="text" class="form-control" id="disability"
                name="disability">
            </div>
            <div class="col-md-4">
              <label for="contactNumber" class="form-label">Numero ng Kontak
                (Contact Number):</label>
              <input type="text" class="form-control" id="contactNumber"
                name="contactNumber">
            </div>
            <div class="col-md-4">
              <label for="birthDate" class="form-label">Petsa ng Kapanganakan
                (Date of Birth):</label>
              <input type="date" class="form-control" id="birthDate"
                name="birthDate">
            </div>
            <div class="col-md-4 mt-3">
              <label for="gender" class="form-label">Kasarian
                (Gender):</label>
              <select class="form-select" id="gender" name="gender">
                <option selected>Pumili ng Kasarian</option>
                <option value="Male">Lalaki (Male)</option>
                <option value="Female">Babae (Female)</option>
                <!-- Add more gender options here -->
              </select>
            </div>
            <div class="col-md-4 mt-3">
              <label for="bloodType" class="form-label">Uri ng Dugo (Blood
                Type):</label>
              <input type="text" class="form-control" id="bloodType"
                name="bloodType">
            </div>
          </div>

          <h4>Emergency Contact</h4>
          <div class="row mb-3">
            <div class="col-md-4">
              <label for="emergencyName" class="form-label">Pangalan
                (Name):</label>
              <input type="text" class="form-control" id="emergencyName"
                name="emergencyName">
            </div>
            <div class="col-md-4">
              <label for="emergencyContact" class="form-label">Numero ng
                Kontak (Contact Number):</label>
              <input type="text" class="form-control" id="emergencyContact"
                name="emergencyContact">
            </div>
            <div class="col-md-4">
              <label for="relationship" class="form-label">Relasyon sa
                Aplikante (Relationship to the Applicant):</label>
              <input type="text" class="form-control" id="relationship"
                name="relationship">
            </div>
          </div>

          <div class="d-flex justify-content-center mb-3">
            <button type="button" class="btn btn-danger me-3"
              onclick="showCommentBox('Declined')">Decline</button>
            <button type="button" class="btn btn-warning me-3"
              onclick="showCommentBox('Pending')">Pending</button>
            <button type="button" class="btn btn-success"
              onclick="hideCommentBox()">Approve</button>
          </div>

          <div id="commentBox" class="mb-3" style="display: none;">
            <label for="comments" class="form-label">Comments:</label>
            <textarea class="form-control" id="comments" name="comments"
              rows="4"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </div>
        </form>
      </div>