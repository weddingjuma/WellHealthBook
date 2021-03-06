<?php
/*****************************************************************************
*       NQF0073.php
*
*       Author:  ClearHealth Inc. (www.clear-health.com)        2009
*       
*       ClearHealth(TM), HealthCloud(TM), WebVista(TM) and their 
*       respective logos, icons, and terms are registered trademarks 
*       of ClearHealth Inc.
*
*       Though this software is open source you MAY NOT use our 
*       trademarks, graphics, logos and icons without explicit permission. 
*       Derivitive works MUST NOT be primarily identified using our 
*       trademarks, though statements such as "Based on ClearHealth(TM) 
*       Technology" or "incoporating ClearHealth(TM) source code" 
*       are permissible.
*
*       This file is licensed under the GPL V3, you can find
*       a copy of that license by visiting:
*       http://www.fsf.org/licensing/licenses/gpl.html
*       
*****************************************************************************/


class NQF0073 extends NQF {

	// TODO
	/*
	 * com.clearhealth.meaningfulUse.nqf0073-pqri201: CMS - 27
	 * Title: Ischemic Vascular Disease (IVD): Blood Pressure Management
	 * Description: Percentage of patients 18 years of age and older who were discharged alive for acute myocardial infarction (AMI), coronary artery bypass graft (CABG) or percutaneous transluminal coronary angioplasty (PTCA) from January 1- November 1 of the year prior to the measurement year, or who had a diagnosis of ischemic vascular disease (IVD) during the measurement year and the year prior to the measurement year and whose recent blood pressure is in control (<140/90 mmHg).
	 */
	public function populate() {
		$dateStart = $this->dateStart;
		$dateEnd = $this->dateEnd;
		return 0;
	}

}
