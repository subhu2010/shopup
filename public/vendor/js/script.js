// sidebar

$(document).ready(function () {
    $(".parent").click(function (e) {
        e.preventDefault();
    });

    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    /*________ data-table _____*/
    $('#table-1').DataTable();
    // date

    var minDate, maxDate;
    var startDate, endDate;

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[4]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );

    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });

    // DataTables initialisation
    var table = $('#tableOrder').DataTable();
    // DataTables initialisation
    var table = $('#reviewManage').DataTable();
    // DataTables initialisation
    var table = $('#sellerManage').DataTable();

    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });



    /* ____________ Product-add __________*/
    var productKey = $('.addClick li');


    $('#category').focus(function () {
        $('div.example').show();
        $(document).bind('focusin.example click.example', function (e) {
            if ($(e.target).closest('.example, #category').length) return;
            $(document).unbind('.example');
            $('div.example').fadeOut('medium');
        });
    });
    $('div.example').hide();



    $(productKey).on('click', function (e) {
        if ($(e.target).hasClass('dropdown')) {
            alert('hello0');
            $(".child.show").removeClass('show');
            $('.child').addClass('show');
        }
        else {
            $('.child.show').removeClass('show');
        }



        $(".addClick li.active").removeClass('active');
        $(this).addClass('active');
    });

    /*____________________ck-editor__________________*/
    CKEDITOR.replace('editor1');

    /*____________________date-table-message__________________*/

    $('#tblPrimaryContent').hide();
    $('#tblPrimary').on('click', function () {
        alert("clicked");
        $('#tblPrimaryContent').toggle('active');
    });

});



document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')

                // change icon
                // toggle.classList.toggle('bx-menu')

                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
    document.body.classList.add("body-pd");
    document.querySelector(".l-navbar").classList.add("show");
    document.querySelector(".header").classList.add("body-pd");
    document.querySelector(".header").classList.add("body-pd");
});

// chart-js
const ctx = document.getElementById("myChart").getContext('2d');

// gradient fill
let gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, "#0d6c81");
gradient.addColorStop(1, "#FFDCDC");


const labels = [
    "2012",
    "2013",
    "2014",
    "2015",
    "2016",
    "2017",
];

const data = {
    labels,
    datasets: [
        {
            data: [12, 19, 3, 5, 2, 3],
            label: "number of courses",
            // add-bg
            fill: true,
            backgroundColor: gradient,
            borderColor: '#ccc',
            tension: 0.3,
            pointBackgroundColor: "#fff"
        },
    ],
};

const config = {
    type: 'line',
    data: data,
    options: {
        radius: 5,
        hitRadius: 30,
        responsive: true,
        // for dollar in y-axis
        scales: {
            y: {
                ticks: {
                    callback: function (value) {
                        return "$" + value + "m";
                    },
                },
            },
        },
    },
};

const myChart = new Chart(ctx, config);



// password
function showPassword(id, el) {
    let x = document.getElementById(id);
    if (x.type === 'password') {
        x.type = 'text';
        el.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg> ';
    } else {
        x.type = 'password';
        el.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
    }
}

//  data table
// $(document).ready( function () {

// } );
