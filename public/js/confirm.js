function deleteHandle(event, id) {
    if (window.confirm('Really Delete?')) {
        console.log('delete-form' + id);
        document.getElementById('delete-form' + id).submit();
    } else {
        alert('canceled.')
    }
}