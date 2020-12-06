/* Functions listed here to be used only under panel/X/... (due to relative paths)*/

function getUser() {
    $.ajax({
        url:'../../php/usercheck.php',
        cache:false,
        success:function(email){
            if (email) {
                return email;
            }
        }
    });
}

function getGroup() {
    $.ajax({
        url:'../../php/groups/groupcheck.php',
        cache:false,
        success:function(group_name){
            if (group_name) {
                return group_name;
            }
        }
    });
}

function setGroup(group_name) {
    $.ajax({
        type:"POST",
        url:'../../php/groups/setGroup.php',
        data: {group: group_name},
        cache:false,
        success:function(response){
            if (response) {
                return response;
            }
        }
    });
}