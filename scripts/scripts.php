<script>
    function updateUser(userID){
        $.get( "/BensonOOP/classes/GetID.php?id="+userID, function(data) {
            document.getElementById('detailed-SideBar').innerHTML = data;
        });
    };
</script>