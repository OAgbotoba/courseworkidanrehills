var Administration = ['Select item...', 'Management and Accounting', 'Public Administration', 'Local Government Studies', 'International Relations'];

var Art = ['Select item...', 'Dramatic Arts', 'English', 'Foreign Languages', 'Linguistics & African Languages', 'History', 'Music', 'Philosophy', 'Religious Studies', 'Yoruba'];
var Agriculture = ['Select item...', 'Agric. Extens & Rural Development', 'Agricultural Economics', 'Animal Sciences', 'Family, Nutrition & Consumer Sciences'];
var Basic_Medical_Sciences = ['Select item...', 'Medical Rehabilitation', 'Nursing Science'];
var Clinical_Sciences = ['Select item...', 'Medicine and Surgery'];
var Environmental_Design_and_Management = ['Select item...', 'Architecture', 'Building', 'Estate Management', 'Fine and Applied Arts', 'Quantity Surveying', 'Urban & Regional Planning', 'Surveying and Geoinformatics'];
var Dentistry = ['Select item...', 'Dentistry'];
var Education = ['Select item...', 'Continuing Education', 'Educational Admin. & Planning', 'Edu. Foundations & Counselling', 'Educational Technology', 'Special Edu. & Curriculum Studies', 'Physical & Health Education', 'Adult Education & Lifelong Learning', 'Educational Management', 'Educational Technology & Library Studies', 'Arts and Social Science Education', 'Science and Technology Education'];
var Law = ['Select item...', 'Law'];
var Pharmacy = ['Select item...', 'Pharmacy'];
var Science = ['Select item...', 'Biochemistry and Molecular Biology', 'Botany', 'Chemistry', 'Geology', 'Mathematics', 'Microbiology', 'Physics', 'Zoology'];
var Social_Sciences = ['Select item...', 'Demography & Social Statistics', 'Economics', 'Entrepreneurship', 'Geography', 'Political Science', 'Psychology', 'Sociology & Anthropology'];
var Technology = ['Select item...', 'Agricultural & Environmental Engineering', 'Chemical Engineering', 'Civil Engineering', 'Computer Science & Engineering', 'Elect. & Elect. Engineering', 'Food Science', 'Materials Science & Engineering', 'Mechanical Engineering'];
var Institute_of_Education = ['Select item...', 'Education'];
var VC_Offices = ['Select item...', 'Computer Center', 'Information and Technology Unit(INTECU)', 'Conference Center'];
    jQuery(window).on('load', function() {
    $("#states").change(function() {
      var states = $(this).val();
      var lgas = eval(states);
      $("#lgas").html("");
      lga.forEach(function(text){
        $("#lgas").append(`<option value="${text}">${text}</option>`);
      });
    })
  });