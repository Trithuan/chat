function askFor(url){
    const req = new XMLHttpRequest();
    if (!req) {
        alert('Abandon :( Impossible de créer une instance XMLHTTP');
        return false;
    }
    req.onreadystatechange = function() { alertContents(req); };
    req.open('GET', url, true);
    req.send(null);
    alertContents(req);
    setTimeout(function(){askFor(url);},2000);
}
function alertContents(req) {
    if (req.readyState == XMLHttpRequest.DONE) {
        if (req.status == 200) {
            document.getElementById("histo").innerHTML = req.responseText;
        } else {
            alert('Un problème est survenu avec la requête.');
        }
    }
}
askFor('getBdd.php');