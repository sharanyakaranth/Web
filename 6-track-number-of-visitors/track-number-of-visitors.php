<?php
  print "<h3> REFRESH PAGE </h3>";
  $filename = "counter.txt";
  $fh = fopen($filename,"r");
  $hits= fscanf($fh,"%d");
  fclose($fh);

  $hits[0]++;

  $fh = fopen($filename,"w");
  fprintf($fh,"%d",$hits[0]);
  fclose($fh);
  print "Total number of views: ".$hits[0];
?>
