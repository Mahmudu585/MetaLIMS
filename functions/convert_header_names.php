<?php

function convert_header_names($p_key){
	
	if($p_key == 'air_sampler_name'){
		$p_key = 'Air Sampler Name';
	}
	if($p_key == 'analysis_name'){
		$p_key = 'Analysis Name';
	}
	if($p_key == 'barcode'){
		$p_key = 'Barcode';
	}
	if($p_key == 'collector_name'){
		$p_key = 'Collector Name(s)';
	}
	if($p_key == 'd_conc'){
		$p_key = 'DNA Concentration (ng/uL)';
	}
	if($p_key == 'd_conc_instrument'){
		$p_key = 'DNA Conc. Instrument';
	}
	if($p_key == 'd_extraction_date'){
		$p_key = 'DNA Extraction Date (YYYY-MM-DD)';
	}
	if($p_key == 'dExtrName'){
		$p_key = 'DNA Extractor Name(s)';
	}
	if($p_key == 'd_volume'){
		$p_key = 'DNA Volume (uL)';
	}
	if($p_key == 'd_volume_quant'){
		$p_key = 'DNA Quant. Vol. (uL)';
	}
	if($p_key == 'dna_extract_kit_name'){
		$p_key = 'DNA Extraction Kit Name';
	}
	if($p_key == 'daily_data'){
		#$p_key = 'Daily Data';
		$p_key = 'false';
	}
	if($p_key == 'daily_weather'){
		#$p_key = 'Daily Weather';
		$p_key = 'false';
	}
	if($p_key == 'end_samp_date_time'){
		//$p_key = 'End Sampling Date/Time (YYYY-MM-DD HH:MM:SS)';
		$p_key = 'false';
	}
	if($p_key == 'entered_by'){
		$p_key = 'Entered By';
	}
	if($p_key == 'flow_rate'){
		$p_key = 'Flow Rate (L/min)';
	}
	if($p_key == 'flow_rate_eod'){
		$p_key = 'Flow Rate EOD (L/min)';
	}
	if($p_key == 'location_name'){
		$p_key = 'Location Name';
	}
	if($p_key == 'media_type'){
		$p_key = 'Media Type';
	}
	if($p_key == 'notes'){
		$p_key = 'Notes';
	}
	if($p_key == 'orig_time_stamp'){
		$p_key = 'Original Time Stamp (YYYY-MM-DD HH:MM:SS)';
	}
	if($p_key == 'part_sens_name'){
		$p_key = 'Sensor Name';
	}
	if($p_key == 'particle_ct_csv_file'){
		#$p_key = 'Sensor CSV File Path';
		$p_key = 'false';
	}
	if($p_key == 'pool_extracts_id'){
		$p_key = 'Pool Extracts ID';
	}
	if($p_key == 'project_name'){
		$p_key = 'Project Name';
	}
	if($p_key == 'r_conc'){
		$p_key = 'RNA Concentration (ng/ul)';
	}
	if($p_key == 'r_conc_instrument'){
		$p_key = 'RNA Conc.Instrument';
	}
	if($p_key == 'r_extraction_date'){
		$p_key = 'RNA Extraction Date (YYYY-MM-DD)';
	}
	if($p_key == 'rExtrName'){
		$p_key = 'RNA Extractor Name(s)';
	}
	if($p_key == 'r_volume'){
		$p_key = 'RNA Volume (uL)';
	}
	if($p_key == 'r_volume_quant'){
		$p_key = "RNA Quant. Vol. (uL) ";
	}
	if($p_key == 'rna_extract_kit_name'){
		$p_key = 'RNA Extraction Kit Name';
	}
	if($p_key == 'relt_loc_name'){
		$p_key = 'Relative Location';
	}
	if($p_key == 'sample_name'){
		$p_key = 'Sample Name';
	}
	if($p_key == 'sample_num'){
		$p_key = 'Sample Number';
	}
	if($p_key == 'sample_sort'){
		$p_key = 'Sample Sort';
	}
	if($p_key == 'sample_type'){
		$p_key = 'Sample Type';
	}
	if($p_key == 'sampling_height'){
		$p_key = 'Sampling Height (cm)';
	}
	if($p_key == 'sequencing_info'){
		$p_key = 'Sequencing Submission Info';
	}
	if($p_key == 'seq_id'){
		$p_key = 'Sequencing Submission ID';
	}
	if($p_key == 'sequencing_id'){
		$p_key = 'false';
	}
	if($p_key == 'start_samp_date_time'){
		//$p_key = 'Start Sampling Date/Time (YYYY-MM-DD HH:MM:SS)';
		$p_key = 'false';
	}
	if($p_key == 'time_stamp'){
		$p_key = 'Time Stamp (YYYY-MM-DD HH:MM:SS)';
	}
	if($p_key == 'total_samp_time'){
		//$p_key = 'Total Sampling Time';
		$p_key = 'false';
	}
	if($p_key == 'updated_by'){
		$p_key = 'Updated By';
	}
	if($p_key == 'seq_vol'){
		$p_key = 'Sequencing Sub. Vol (uL)';
	}
	if($p_key == 'seq_dna_conc'){
		$p_key = 'Sequencing Sub. DNA Conc.(ng/uL)';
	}
	if($p_key == 'pooled_flag'){
		$p_key = 'false';
	}
	if($p_key == 'part_of_pool'){
		$p_key = 'false';
	}
	
	
	//for daily_data2 table
	if($p_key == 'daily_date'){
		$p_key = 'Daily Date';
	}
	if($p_key == 'start_time'){
		$p_key = 'Start Time';
	}
	if($p_key == 'end_time'){
		$p_key = 'End Time';
	}
	if($p_key == 'temp'){
		$p_key = 'Temp (Celsius)';
	}
	if($p_key == 'hum'){
		$p_key = 'Humidity';
	}
	if($p_key == 'co2'){
		$p_key = 'CO2';
	}
	if($p_key == 'rain'){
		$p_key = 'Rain (mm)';
	}
	if($p_key == 'update_timestamp'){
		$p_key = 'Updated Timestamp (YYYY-MM-DD HH:MM:SS)';
	}
	if($p_key == 'temp_record'){
		$p_key = 'Temperature Record';
	}
	if($p_key == 'hum_record'){
		$p_key = 'Humidity Record';
	}
	if($p_key == 'co2_record'){
		$p_key = 'CO2 Record';
	}
	if($p_key == 'rain_record'){
		$p_key = 'Rain Record';
	}
	if($p_key == 'wind_record'){
		$p_key = 'Wind Record';
	}
	if($p_key == 'haze_record'){
		$p_key = 'Haze Record';
	}
	if($p_key == 'haze'){
		$p_key = 'Haze (PSI)';
	}
	if($p_key == 'wind'){
		$p_key = 'Wind (m/s)';
	}
	
	//for pooled sample lookup
	if($p_key == 'new_pooled_samp_name'){
		$p_key = 'New Pooled Sample Name';
	}
	if($p_key == 'orig_sample_name'){
		$p_key = 'Original Sample';
	}
	if($p_key == 'date_entered'){
		$p_key = 'Date Entered';
	}
	
	//for sequencing submission sample lookup
	if($p_key == 'sequencer_name'){
		$p_key = 'Sequencer';
	}
	if($p_key == 'sequencing_type'){
		$p_key = 'Sequencing Type';
	}
	if($p_key == 'date_submitted'){
		$p_key = 'Date Submitted';
	}
	if($p_key == 'library_prep_kit'){
		$p_key = 'Library Prep Kit';
	}
	
	//for storage info
	if($p_key == 'original'){
		$p_key = 'Original Sample Storage';
	}
	if($p_key == 'orig_sample_exists'){
		$p_key = 'Original Sample Exists';
	}
	if($p_key == 'dna_extr'){
		$p_key = 'DNA Extraction Storage';
	}
	if($p_key == 'DNA_sample_exists'){
		$p_key = 'DNA Extraction Sample Exists';
	}
	if($p_key == 'rna_extr'){
		$p_key = 'RNA Extraction Storage';
	}
	if($p_key == 'RNA_sample_exists'){
		$p_key = 'RNA Extraction Sample Exists';
	}
	
	//for viewing sequence read submissions
	if($p_key == 'subm_id'){
		$p_key = 'Submission Read ID';
	}
	if($p_key == 'subm_db'){
		$p_key = 'Submission DB';
	}
	if($p_key == 'subm_date'){
		$p_key = 'Submission Date';
	}
	if($p_key == 'submitter'){
		$p_key = 'Submitter';
	}
	
	//for viewing sequencing submissions
	if($p_key == 'type_exp'){
		$p_key = 'Type Of Experiment';
	}
	if($p_key == 'container_type'){
		$p_key = 'Container Type';
	}
	if($p_key == 'sequencing_method'){
		$p_key = 'Sequencing Method';
	}
	if($p_key == 'submitted_by'){
		$p_key = 'Submitted By';
	}
	if($p_key == 'quant_method'){
		$p_key = 'Quantitation Method';
	}
	if($p_key == 'read_length'){
		$p_key = 'Read Length';
	}
	if($p_key == 'seq_pool'){
		$p_key = 'Pooling (Y/N)';
	}
	if($p_key == 'seq_sub_name'){
		$p_key = 'Sample Submission Name';
	}
	if($p_key == 'dna_conc'){
		$p_key = 'DNA Conc. (ng/uL)';
	}
	if($p_key == 'vol'){
		$p_key = 'Vol (uL)';
	}
	if($p_key == 'wellLoc'){
		$p_key = 'Well Loc.';
	}
	if($p_key == 'sampBuffer'){
		$p_key = 'Sample Buffer';
	}
	if($p_key == 'nano'){
		$p_key = 'Nanodrop Conc. (ng/uL)';
	}
	if($p_key == 'a_280'){
		$p_key = '260/280';
	}
	if($p_key == 'a_230'){
		$p_key = '260/230';
	}
	if($p_key == 'dnaCont'){
		$p_key = '% DNA Contamination';
	}
	if($p_key == 'RIN'){
		$p_key = 'RIN\RINe';
	}
	if($p_key == 'sample_exists'){
		$p_key = 'false';
	}
	if($p_key == 'amplicon_type'){
		$p_key = 'Amplicon Type';
	}
	if($p_key == 'primerL'){
		$p_key = 'Left Primer Set Name';
	}
	if($p_key == 'primerR'){
		$p_key = 'Right Primer Set Name';
	}
	
	//for isolates
	if($p_key == 'iso_coll_temp'){
		$p_key = 'Isolate Collection Temperature';
	}
	if($p_key == 'iso_date'){
		$p_key = 'Isolate Collection Date';
	}
	if($p_key == 'iso_store_method'){
		$p_key = 'Isolate Storage Method';
	}
	if($p_key == 'closest_hit'){
		$p_key = 'Closest Hit';
	}
	if($p_key == 'seq_sang'){
		$p_key = 'Sequence (Sanger)';
	}
	if($p_key == 'send_pac_bio'){
		$p_key = 'Send For Pac Bio Seq';
	}
	if($p_key == 'loc_type'){
		$p_key = 'Isolate Location Type';
	}
	
	//air sampler fields
	if($p_key == 'start_date_time'){
		$p_key = 'Start Date/Time (YYYY-MM-DD HH:MM:SS)';
	}
	if($p_key == 'end_date_time'){
		$p_key = 'End Date/Time (YYYY-MM-DD HH:MM:SS)';
	}
	if($p_key == 'total_date_time'){
		$p_key = 'Total Time';
	}
	
	return $p_key;		
	
}
					

?>