// function tableShow waits for onclick to display sleected table

function tableShow() {
    dbTable = document.getElementById("dataSelect").value;
    switch (dbTable) {
        case "billing":
            document.getElementById("billingData").style.display = "block";
            document.getElementById("insuranceData").style.display = "none";
            document.getElementById("medicationData").style.display = "none";
            document.getElementById("patientData").style.display = "none";
            document.getElementById("prescriptionData").style.display = "none";
            break;
        case "insurance":
            document.getElementById("billingData").style.display = "none";
            document.getElementById("insuranceData").style.display = "block";
            document.getElementById("medicationData").style.display = "none";
            document.getElementById("patientData").style.display = "none";
            document.getElementById("prescriptionData").style.display = "none";
            break;
        case "medications":
            document.getElementById("billingData").style.display = "none";
            document.getElementById("insuranceData").style.display = "none";
            document.getElementById("medicationData").style.display = "block";
            document.getElementById("patientData").style.display = "none";
            document.getElementById("prescriptionData").style.display = "none";
            break;
        case "patients":
            document.getElementById("billingData").style.display = "none";
            document.getElementById("insuranceData").style.display = "none";
            document.getElementById("medicationData").style.display = "none";
            document.getElementById("patientData").style.display = "block";
            document.getElementById("prescriptionData").style.display = "none";
            break;
        case "prescriptions":
            document.getElementById("billingData").style.display = "none";
            document.getElementById("insuranceData").style.display = "none";
            document.getElementById("medicationData").style.display = "none";
            document.getElementById("patientData").style.display = "none";
            document.getElementById("prescriptionData").style.display = "block";
            break;                                
        default:
            break;
    }    
}

