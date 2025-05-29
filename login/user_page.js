function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("content").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("content").style.marginLeft = "0";
}
function opennotif() {
  document.getElementById("notifs").style.width = "250px";
  document.getElementById("content").style.marginRight= "250px";
}

function closenotif() {
  document.getElementById("notifs").style.width = "0";
  document.getElementById("content").style.marginRight = "0";
}
function openmessage() {
  document.getElementById("msg").style.width = "250px";
  document.getElementById("content").style.marginRight= "250px";
}

function closemessage() {
  document.getElementById("msg").style.width = "0";
  document.getElementById("content").style.marginRight = "0";
}

document.getElementById("postForm").addEventListener("submit", function (event) {
    event.preventDefault();
    
    let formData = new FormData();
    formData.append("title", document.getElementById("title").value);
    formData.append("content", document.getElementById("content").value);
    formData.append("image", document.getElementById("image").files[0]);

    fetch("upload.php", {
        method: "POST",
        body: formData
    }).then(() => location.reload());
});

fetch("fetch_posts.php")
    .then(response => response.json())
    .then(posts => {
        const container = document.getElementById("posts-container");
        posts.forEach(post => {
            const div = document.createElement("div");
            div.innerHTML = `<div style="margin-top: 50px;
     width: 100%;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    display: block;
    align-items:center;">
    <h3 style=" font-weight: 600;
    color: #333;text-align:center;align-items:center">${post.title}</h3>
            <p style="font-weight: 600;color: #333;background:#fff;text-align:center;">${post.content}</p>
           <img src="${post.image}" width="100%" height :"auto"style="align-items:center;text-align:center;" >
                             <button onclick="deletePost(${post.id})"style="margin-left:390px;
     margin-left:0%;
    background:linear-gradient(to right,#fd9494,#99b0fa);
    color: #333;
    font-weight: 600;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;">Delete</button></div>`;
            container.appendChild(div);
        });
    });

function deletePost(id) {
    fetch("delete_post.php", {
        method: "POST",
        body: JSON.stringify({ id: id }),
        headers: { "Content-Type": "application/json" }
    }).then(() => location.reload());
}
