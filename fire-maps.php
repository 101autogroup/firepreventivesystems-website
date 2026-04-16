<?php
$pageTitle = 'Fire Maps - Fire Preventive Systems';
$pageDesc = 'View current California wildfire maps and fire activity near you.';
include 'includes/header.php';
?>
<main>
  <section class="page-hero-mini">
    <div class="container">
      <h1>Fire Maps</h1>
      <p>Track active wildfires in California in real time.</p>
    </div>
  </section>
  <section class="maps-section">
    <div class="container">
      <div class="map-embed">
        <iframe
          src="https://www.fire.ca.gov/incidents"
          title="Current Fire Map California"
          width="100%"
          height="600"
          frameborder="0"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
      <p class="map-caption">Current Fire Map California &mdash; Data provided by <a href="https://www.fire.ca.gov" target="_blank" rel="noopener">CAL FIRE</a></p>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
