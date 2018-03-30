<!-- Header -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container">
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">

      <!-- Title -->
      <h1>Talent Registration</h1>

      <!-- Registration Form -->
      <form class="form-group" action="index.html" method="post">

        <!-- Name -->
        <label for="">Name/Act</label>
        <input class="form-control" type="text" name="" value="">
        <br>

        <!-- Type -->
        <label for="">Type of Act</label>
        <select class="form-control" name="">
          <option value="">Musician</option>
          <option value="">Band</option>
          <option value="">DJ</option>
          <option value="">Other</option>
        </select>
        <br>

        <!-- County -->
        <label for="">County</label>
        <input class="form-control" type="text" name="" value="">
        <br>

        <!-- Postcode -->
        <label for="">Postcode</label>
        <input class="form-control" type="text" name="" value="">
        <br>

        <!-- Distance to Travel -->
        <label for="">Distance to Travel</label>
        <input class="form-control" type="text" name="" value="">
        <br>

        <!-- Terms and conditions -->
        <p>I accept the terms and conditions.</p>

        <!-- Disable button until checked -->
        <input id='CheckTerms' class="form-control" type="checkbox" name="" value="" onchange="document.getElementById('submitButton').disabled = !this.checked;">
        <br>

        <!-- Submit Button -->
        <button id='submitButton' class="btn btn-primary" type="submit" name="submit">Submit</button>
      </form>
    </div>
  <!-- Footer -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
