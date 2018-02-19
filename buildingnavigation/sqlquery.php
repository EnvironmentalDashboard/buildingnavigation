SQL QUERY CHANGES

CURRENT ELECTRICITY
<?php
	$sql = "SELECT DISTINCT buildings.name, buildings.id, buildings.area, buildings.building_type, buildings.custom_img, meters.current, meters.building_id, meters.for_orb, meters.timeseries_using, meters.bos_uuid, meters.scope, meters.units FROM buildings 
	          INNER JOIN meters ON buildings.id=meters.building_id
	          WHERE buildings.custom_img IS NOT NULL AND meters.scope = 'Whole building' AND meters.units = 'Kilowatts' AND buildings.area != 0 AND (meters.for_orb > 0 OR meters.timeseries_using > 0 
	        OR meters.bos_uuid IS NOT NULL) ORDER BY current DESC";
?>

CURRENT WATER 
<?php
	$sql = "SELECT DISTINCT buildings.name, buildings.id, buildings.area, buildings.building_type, buildings.custom_img, meters.current, meters.building_id, meters.for_orb, meters.timeseries_using, meters.bos_uuid, meters.scope, meters.units FROM buildings 
	          INNER JOIN meters ON buildings.id=meters.building_id
	          WHERE buildings.custom_img IS NOT NULL AND meters.scope = 'Whole building' AND meters.units = 'Gallons / hour' AND buildings.area != 0 AND (meters.for_orb > 0 OR meters.timeseries_using > 0 
	        OR meters.bos_uuid IS NOT NULL) ORDER BY current DESC";
?>

RELATIVE VALUE ELECTRICITY
<?php
    $sql = "SELECT DISTINCT buildings.name, buildings.id, buildings.area, buildings.building_type, buildings.custom_img, meters.current, meters.building_id, meters.for_orb, meters.timeseries_using, meters.bos_uuid, meters.scope, meters.units, relative_values.relative_value FROM buildings 
      INNER JOIN meters ON buildings.id=meters.building_id
      INNER JOIN relative_values ON meters.bos_uuid=relative_values.meter_uuid
      WHERE buildings.custom_img IS NOT NULL AND meters.scope = 'Whole building' AND meters.units = 'Kilowatts' AND buildings.area != 0 AND (meters.for_orb > 0 OR meters.timeseries_using > 0 
    OR meters.bos_uuid IS NOT NULL) 
    ORDER BY relative_value DESC";
?>
RELATIVE VALUE WATER
<?php
    $sql = "SELECT DISTINCT buildings.name, buildings.id, buildings.area, buildings.building_type, buildings.custom_img, meters.current, meters.building_id, meters.for_orb, meters.timeseries_using, meters.bos_uuid, meters.scope, meters.units, relative_values.relative_value FROM buildings 
      INNER JOIN meters ON buildings.id=meters.building_id
      INNER JOIN relative_values ON meters.bos_uuid=relative_values.meter_uuid
      WHERE buildings.custom_img IS NOT NULL AND meters.scope = 'Whole building' AND meters.units = 'Gallons / hour' AND buildings.area != 0 AND (meters.for_orb > 0 OR meters.timeseries_using > 0 
    OR meters.bos_uuid IS NOT NULL) 
    ORDER BY relative_value DESC";
?>