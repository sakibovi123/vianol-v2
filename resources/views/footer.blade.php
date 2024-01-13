<!-- Admin Dashboard End -->
{{-- <!-- Jquery CDN --> --}}
{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"
 integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>


  <script type="text/javascript" src="{{ asset('js/fileupload.js') }}"></script>
  <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script defer src="{{ asset('js/datatable.js') }}"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script defer src="https://cdn.datatables.net/v/bs5/dt-1.13.8/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.js"></script>



<!--  Bootstrap Bundle with Popper -->
<script defer src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!--Data table Js-->
{{-- <script src="{{ asset('assets/js/data-table/jquery.dataTables.js') }}"></script> --}}



<!--Chart plugins-->
<script defer src="{{ asset('js/chart/apexcharts.min.js') }}"></script>
<script defer src="{{ asset('js/chart/chart.js') }}"></script>

{{--richtexteditor--}}
<script defer type="text/javascript" src="{{ asset('richtexteditor/richtexteditor/rte.js') }}"></script>
<script defer type="text/javascript" src='{{ asset('richtexteditor/richtexteditor/plugins/all_plugins.js') }}'></script>

<script defer>
    window.onload = function() {
        // var editor1 = new RichTextEditor("#inp_editor1");
        var editor1 = new RichTextEditor("#inp_editor1", { editorResizeMode: "both" });
    };
</script>

<!-- select 2 js code -->
<script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script defer>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

<script defer>
   $(document).ready(function () {
        $(".timezone").on("click", ".cross-icon", function () {
            $(this).closest('.timezone').remove();
        });
        $(".add-icon").click(function () {
            var inputContainer = $(this).closest(".timezone");
            var newInput = `
                <div class="timezone column-2 w-100 w-100 d-flex justify-content-between align-items-center">
<!--                    <p class="w-25 fs-6 fw-bold">Timetables</p>-->
                    <input type="time" name="number_of_people" class="form-control w-75" placeholder="13-14">
                    <span class="iconify fs-4 mx-2 cross-icon" data-icon="charm:cross"></span>

                </div>
            `;
            inputContainer.append(newInput);
        });
    });
</script>


<!-- Customized JavaScript -->
<script defer src="{{ asset('js/main.js') }}"></script>



<script>
    const disableStyles = new CSSStyleSheet();
    document.adoptedStyleSheets.push(disableStyles);

    document.addEventListener("DOMContentLoaded", function () {
        var dateRangePicker = document.getElementById("dateRangePicker");
        var dateRangePicker2 = document.getElementById("dateRangePicker2");

        var picker = flatpickr(dateRangePicker, {
            mode: "range",
            dateFormat: "d-m-Y",
            onChange: function (selectedDates) {
                updateMultiDatePicker(selectedDates);
            },
        });

        var picker2 = flatpickr(dateRangePicker2, {
            mode: "multiple",
            dateFormat: "Y-m-d",
            open: true,
            inline: true,
            allowInput: true,
            onChange: function (selectedDates) {
                updateDeselectedDates(selectedDates);
            },
        });

        function updateMultiDatePicker(selectedDates) {


            const allDates = document.querySelectorAll(
                "#dateRangePicker2 .flatpickr-day",
            );
            allDates.forEach(function (el) {
                el.classList.add("blabla");
            });

            // console.log(allDates)
            if (selectedDates.length === 2) {
                var startDate = selectedDates[0];
                var endDate = selectedDates[1];

                document.querySelector('input[name="operation_from_date"]').value = startDate ? startDate.toISOString().split('T')[0] : '';
                document.querySelector('input[name="operation_to_date"]').value = endDate ? endDate.toISOString().split('T')[0] : '';

                var datesToUpdate = [];
                let ariaLabels = [];

                var currentDate = new Date(startDate);
                while (currentDate <= endDate) {
                    datesToUpdate.push(new Date(currentDate));
                    ariaLabels = ariaLabels.concat(
                        picker2.formatDate(
                            new Date(currentDate),
                            picker2.config.ariaDateFormat,
                        ),
                    );
                    currentDate.setDate(currentDate.getDate() + 1);
                }

                picker2.setDate(datesToUpdate);

                const selectors = ariaLabels
                    .map((label) => `[aria-label="${label}"]`)
                    .join(",");
                disableStyles.replace(
                    `#dateRangePicker2 + .flatpickr-calendar :is(${selectors}):not(.selected) { background-color: red }`,
                );
            }
        }

        function updateDeselectedDates(selectedDates) {
            const allSelectedDates = document.querySelectorAll(
                ".flatpickr-day.selected",
            );
            // allSelectedDates.addClass

            allSelectedDates.forEach(function (dateElement) {
                dateElement.classList.add("blabla");

                if (!dateElement.classList.contains("blabla")) {
                    dateElement.addEventListener("click", function () {
                        dateElement.classList.add("deselected");
                    });
                }
                const dateString = dateElement.getAttribute("aria-label");
                const isSelected = selectedDates.includes(dateString);
            });
        }
    });
</script>


<script>
    $(document).ready(function() {
        const calculateTotalPrice = () => {
            let adultPrice = parseFloat($('#adult_price').val()) || 0;
            let boyPrice = parseFloat($('#boy_price').val()) || 0;
            let infantPrice = parseFloat($('#infant_price').val()) || 0;

            // Validate if input is a number
            adultPrice = isNaN(adultPrice) ? 0 : adultPrice;
            boyPrice = isNaN(boyPrice) ? 0 : boyPrice;
            infantPrice = isNaN(infantPrice) ? 0 : infantPrice;

            const totalPrice = adultPrice + boyPrice + infantPrice;

            $('#total_price').val(`$${totalPrice.toFixed(2)}`);
        };

        // Event listeners for input fields to calculate total price on input change
        $('#adult_price, #boy_price, #infant_price').on('input', calculateTotalPrice);

        // Initial calculation when the page loads
        calculateTotalPrice();
    });



</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&libraries=places&callback=initMap" async defer></script>


<script>
    let map;
    let autocomplete1;
    let autocomplete2;

    let directionsService;
    let directionsDisplay;


    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15
        });

        directionsService = new google.maps.DirectionsService();
        directionsDisplay = new google.maps.DirectionsRenderer();
        directionsDisplay.setMap(map);

        // Initialize Autocomplete for address inputs
        autocomplete1 = new google.maps.places.Autocomplete(
            document.getElementById('address')
        );
        // autocomplete2 = new google.maps.places.Autocomplete(
        //     document.getElementById('address2')
        // );

        // Get the user's current location
        getCurrentLocation();
    }

    function getCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                map.setCenter(userLocation);
                addMarker(userLocation, map);

                // setting longitude and latitude
                document.getElementById("latitude").value = position.coords.latitude;
                document.getElementById('longitude').value = position.coords.longitude;

                handleLocationSet();
            }, function(error) {
                console.error('Error getting user location:', error);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    }
    //
    function showMap() {
        const address1 = document.getElementById('address').value;
        console.log(address1)
        // const address2 = document.getElementById('address2').value;

        const geocoder = new google.maps.Geocoder();

        geocoder.geocode({ address: address1 }, (results, status) => {
            if (status === 'OK') {
                const location1 = results[0].geometry.location;
                addMarker(location1, map);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

    function addMarker(location, map) {
        const marker = new google.maps.Marker({
            position: location,
            map: map
        });
        map.setCenter(location);
    }
</script>

</body>
</html>
