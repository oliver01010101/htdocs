<?php

echo stats_count($sightings);
echo "<br>";
echo stats_avg_age($sightings);
echo "<br>";
print_r(stats_day_of_sighting($sightings));