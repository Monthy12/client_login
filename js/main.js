
function singleYear() {
    var programmes = document.getElementById("success-outlined").value;

    if (programmes == '1'){
        document.getElementById("multipleForms").style.visibility = "hidden";
        document.getElementById("singleForm").style.visibility = "visible";
        $('#singleForm').css("margin-top",'-340px')
    }
    
}

function multipleYears() {

    var programme = document.getElementById("danger-outlined").value;

    if (programme == '2'){
        document.getElementById("singleForm").style.visibility = "hidden";
        document.getElementById("multipleForms").style.visibility = "visible";
        $('#multipleForms').css("margin-bottom",'-230px')
    }else{
        document.getElementById("multipleForms").style.visibility = "visible";
    }
    
}


function filing_support() {

    var filings = document.getElementById("filing").value;
    // alert(filings);

    if (filings == 'Yes'){
        document.getElementById("support_form").style.visibility = "visible";
        document.getElementById("support_form_01").style.visibility = "visible";
    }else{
        document.getElementById("support_form").style.visibility = "hidden";
        document.getElementById("support_form_01").style.visibility = "hidden";
    }    
}


function filing_support_01() {

    var filing_01 = document.getElementById("filing_01").value;
    // alert(filing_01);

    if (filing_01 == 'No'){
        document.getElementById("support_form").style.visibility = "hidden";
        document.getElementById("support_form_01").style.visibility = "hidden";
        // $('#id_task_category').css("margin-bottom",'0.1px')
    }else{
        document.getElementById("support_form").style.visibility = "visible";
        document.getElementById("support_form_01").style.visibility = "visible";
    }
    
}


(function ($) {
    $(document).ready(function(){

        $(".navscroll").hide();

        $(function () {
            $(window).scroll(function(){

                if($(this).scrollTop() > 100) {
                    $(".navscroll").fadeIn();
                }else{
                    $(".navscroll").fadeOut();
                }
            })
        })
    })
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})



var inputButton = document.querySelector('#real_input');
var customButton_new = document.querySelector('#input1');
var fileNames = document.querySelector('#file_names');

customButton_new.addEventListener('click', () => {
    inputButton.click();
});

inputButton.addEventListener('change', () => {
    if(inputButton.value) {
        fileNames.innerHTML = inputButton.value.split(/(\\|\/)/g).pop();
    }
})



var inputButton2 = document.querySelector('#real_input2');
var customButton_new2 = document.querySelector('#input2');
var fileNames2 = document.querySelector('#file_name2');

customButton_new2.addEventListener('click', () => {
    inputButton2.click();
});

inputButton2.addEventListener('change', () => {
    if(inputButton2.value) {
        fileNames2.innerHTML = inputButton2.value.split(/(\\|\/)/g).pop();
    }
})


var inputButton3 = document.querySelector('#real_input3');
var customButton_new3 = document.querySelector('#input3');
var fileNames3= document.querySelector('#file_name3');

customButton_new3.addEventListener('click', () => {
    inputButton3.click();
});

inputButton3.addEventListener('change', () => {
    if(inputButton3.value) {
        fileNames3.innerHTML = inputButton3.value.split(/(\\|\/)/g).pop();
    }
})


var inputButton4 = document.querySelector('#real_input4');
var customButton_new4 = document.querySelector('#input4');
var fileNames4 = document.querySelector('#file_name4');

customButton_new4.addEventListener('click', () => {
    inputButton4.click();
});

inputButton4.addEventListener('change', () => {
    if(inputButton4.value) {
        fileNames4.innerHTML = inputButton4.value.split(/(\\|\/)/g).pop();
    }
})





function amended_returns_no() {
    var returns = document.getElementById("btn-check-4-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("no_amended_returns").style.visibility = "hidden";
        // document.getElementById("singleForm").style.visibility = "visible";
        $('#amended_returns_id').css("margin-bottom",'-110px')
    }else {
        $('#amended_returns_id').css("margin-bottom",'110px')
    }
    
}

function amended_returns_yes() {
    var returns = document.getElementById("btn-check-3-outlined").value;

    if (returns == 'yes'){
        document.getElementById("no_amended_returns").style.visibility = "visible";
        // document.getElementById("singleForm").style.visibility = "visible";
        $('#amended_returns_id').css("margin-bottom",'20px')
    }
    
}


function irs_pin_no() {
    var returns = document.getElementById("btn-check-3-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("irs_pin_id").style.visibility = "hidden";
        }   
        
}

function irs_pin_yes() {
    var returns = document.getElementById("btn-check-4-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("irs_pin_id").style.visibility = "visible";
    }
    
}



function us_citizen_no() {
    var returns = document.getElementById("btn-check-2-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("SSN_id").style.visibility = "hidden";
        }   
        
}

function us_citizen_yes() {
    var returns = document.getElementById("btn-check-1-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("SSN_id").style.visibility = "visible";
    }
    
}


function itin_no() {
    var returns = document.getElementById("btn-check-2-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("itin_number_id").style.visibility = "hidden";
        // $('#apply_itin_id').css("margin-bottom",'-800px')
    }   
        
}

function itin_yes() {
    var returns = document.getElementById("btn-check-1-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("itin_number_id").style.visibility = "visible";
    }
    
}



function apply_itin_no() {
    var returns = document.getElementById("btn-check-12-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("foreign_id").style.visibility = "hidden";
        
        // $('#apply_itin_id').css("margin-bottom",'-800px')
    }   
        
}

function apply_itin_yes() {
    var returns = document.getElementById("btn-check-11-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("foreign_id").style.visibility = "visible";
    }
}


function blance_sheet_no() {
    var returns = document.getElementById("btn-check-13-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("blance_sheet_id").style.visibility = "hidden";
        
        // $('#apply_itin_id').css("margin-bottom",'-800px');
    }   
        
}

function blance_sheet_yes() {
    var returns = document.getElementById("btn-check-14-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("blance_sheet_id").style.visibility = "visible";
    }
}



function return_client_no() {
    var returns = document.getElementById("btn-check-6-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        // document.getElementById("US_tax_id").style.visibility = "visible";
        // document.getElementById("tax_extension_id").style.visibility = "visible";
        // $('#tax_extension_id').css("margin-top",'200px');
        // document.getElementById("claimed_dependent_id").style.visibility = "visible";
        // $('#last_US_filed_id').css("margin-bottom",'-120px');

        document.getElementById("cluster_id").style.visibility = "hidden";
        // $('#tax_extension_id').css("margin-bottom",'300px');
    }
    
}

function return_client_yes() {
    var returns = document.getElementById("btn-check-5-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("cluster_id").style.visibility = "visible";
        document.getElementById("last_US_filed_id").style.visibility = "visible";
        document.getElementById("date_extension_id").style.visibility = "visible";
        // document.getElementById("singleForm").style.visibility = "visible";
        // $('#amended_returns_id').css("margin-bottom",'20px')
    }
    
}



function previous_tax_no() {
    var returns = document.getElementById("btn-check-8-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("last_US_filed_id").style.visibility = "hidden";
        // document.getElementById("singleForm").style.visibility = "visible";
        // $('#amended_returns_id').css("margin-bottom",'-110px')
        $('#US_tax_id').css("margin-bottom",'-110px');
        // $('#tax_extension_id').css("margin-bottom",'-100px');
    }else {
        // $('#US_tax_id').css("margin-bottom",'110px')
    }
    
}

function previous_tax_yes() {
    var returns = document.getElementById("btn-check-7-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("last_US_filed_id").style.visibility = "visible";
        // document.getElementById("singleForm").style.visibility = "visible";
        $('#US_tax_id').css("margin-bottom",'10px')
        $('#last_US_filed_id').css("margin-bottom",'10px')
    }
    
}


function tax_extension_no() {
    var returns = document.getElementById("btn-check-10-outlined").value;

    if (returns == 'no'){
        document.getElementById("date_extension_id").style.visibility = "hidden";
        // document.getElementById("singleForm").style.visibility = "visible";
        // $('#amended_returns_id').css("margin-bottom",'-110px')
        $('#tax_extension_id').css("margin-bottom",'-100px')
    }else {
        // $('#US_tax_id').css("margin-bottom",'110px')
    }
    
}

function tax_extension_yes() {
    var returns = document.getElementById("btn-check-9-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("date_extension_id").style.visibility = "visible";
        // document.getElementById("singleForm").style.visibility = "visible";
        $('#tax_extension_id').css("margin-bottom",'10px')
    }
    
}



function file_tax_no() {
    var returns = document.getElementById("btn-check-10-outlined").value;
    // alert(returns);
    if (returns == 'no'){
        document.getElementById("show_item").style.visibility = "hidden";
        $('#show_item').css("margin-bottom",'-100px')
    }
    
}

function file_tax_yes() {
    var returns = document.getElementById("btn-check-9-outlined").value;
    // alert(returns);
    if (returns == 'yes'){
        document.getElementById("show_item").style.visibility = "visible";
        // document.getElementById("singleForm").style.visibility = "visible";
        $('#show_item').css("margin-bottom",'10px')
    }
    
}

var tele = document.querySelector('#telle');

tele.addEventListener('keyup', function(e){
  if (event.key != 'Backspace' && (tele.value.length === 3 || tele.value.length === 6)){
  tele.value += '-';
  }
});