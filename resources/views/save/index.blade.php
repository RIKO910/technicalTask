<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Textboxes</title>
</head>
<body>
    <form action="{{ route('save') }}" method="post">
        @csrf
        <label for="textbox_count">Enter number of textboxes:</label>
        <input type="number" id="textbox_count" name="textbox_count" placeholder="Enter number of textboxes">
        <button type="button" onclick="addTextboxes()">Add Textbox</button>
        <div id="textboxes"></div>
        <button type="submit">Save</button>

        <p>Total Number: <span id="selected_count" name="">0</span></p>
        <p>Selected Item: <span id="selected_checkbox">0</span></p>

        <input type="hidden" id="selected_count_input" name="selected_count" value="0">

    </form>

    {{-- <script>
        function addTextboxes() {
            var count = document.getElementById('textbox_count').value;
            var html = '';
            for (var i = 1; i <= count; i++) {
                html += '<input type="text" name="textbox_' + i + '" oninput="updateTotalValue()">';
                html += '<input type="checkbox" name="checkbox_' + i + '" onchange="updateSelectedCount()">';
                html += '<br>';
            }
            document.getElementById('textboxes').innerHTML = html;

            // Call updateSelectedCount initially to calculate the total selected positions
            updateSelectedCount();

        }


        function updateSelectedCount() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var totalValue = 0;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    var textboxName = checkbox.previousElementSibling.name;
                    var textboxValue = parseInt(document.getElementsByName(textboxName)[0].value) || 0;
                    totalValue += textboxValue;
                }
            });
            document.getElementById('selected_count').innerText = totalValue;

            // Update the hidden input field with the selected count
            document.getElementById('selected_count_input').value = totalValue;
        }
    </script> --}}

    <script>
        function addTextboxes() {
            var count = document.getElementById('textbox_count').value;
            var html = '';
            for (var i = 1; i <= count; i++) {
                html += '<input type="text" name="textbox_' + i + '" oninput="updateTotalValue()">';
                html += '<input type="checkbox" name="checkbox_' + i + '" onchange="updateSelectedCount()">';
                html += '<br>';
            }
            document.getElementById('textboxes').innerHTML = html;

            // Call updateSelectedCount initially to calculate the total selected positions
            updateSelectedCount();
        }

        function updateSelectedCount() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var totalValue = 0;
            var checkedCount = 0; // Initialize checked count
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    checkedCount++; // Increment checked count
                    var textboxName = checkbox.previousElementSibling.name;
                    var textboxValue = parseInt(document.getElementsByName(textboxName)[0].value) || 0;
                    totalValue += textboxValue;
                }
            });
            document.getElementById('selected_count').innerText = totalValue;

            // Update the hidden input field with the selected count
            document.getElementById('selected_count_input').value = totalValue;

            // Update total number of checked checkboxes
            document.getElementById('selected_checkbox').innerText = checkedCount;
        }
    </script>




</body>
</html>
