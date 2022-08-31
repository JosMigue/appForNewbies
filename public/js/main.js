function deleteUser(route, element){
    let userResponse = confirm('Are you sure you want to delete user?');
    if (userResponse){
        axios.delete(route)
        .then((response) => {
            if(response.status == 200){
                element.closest('tr').remove();
                alert(`User ${response.data.name} has been deleted`);
            }
        })
    }else{
        alert('nothing happened :)');
    }
}