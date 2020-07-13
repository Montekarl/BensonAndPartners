<script>
    function showMoreDetailsSideBar(userID){
        $.get( "/BensonOOP/classes/GetID.php?id="+userID, function(data) {
            document.getElementById('detailed-SideBar').innerHTML = data;
        });
    };

    function bookLettingsAppointment(userID){
        $.get( "/BensonOOP/classes/GetID.php?id="+userID, function(data) {
            document.getElementById('detailed-SideBar').innerHTML = data;
        });
    }
</script>

