<script>
  function take_snapshot() {

    //To take the snapshot and get image data

    Webcam.snap(function (data_uri) {

        // To display the results in page

        document.getElementById('results').innerHTML =

            '<h3>Here is your image....</h3>' +

            '<img src="' +data_uri+ '" width=\'280px\' height=\'250px\'/>';

        Webcam.upload(data_uri, 'saveimages.php', function (code, text) {

                alert("Successfull");

        });

    });

    Webcam.reset();

}
  </script>
    <button onclick="take_snapshot()">xxx</button>
