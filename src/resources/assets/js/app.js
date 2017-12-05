var storyEditor = document.getElementById("content");
CKEDITOR.replace(storyEditor, {
  height: 300,
  toolbarCanCollapse: true,
  // Define the toolbar groups as it is a more accessible solution.
  toolbarGroups: [
    { name: "basicstyles", groups: ["basicstyles"] },
    { name: "links", groups: ["links"] },
    { name: "paragraph", groups: ["list", "blocks"] },
    { name: "document", groups: ["mode"] },
    { name: "insert", groups: ["insert"] },
    { name: "styles", groups: ["styles"] }
  ]
});

  var file = document.getElementById("cover-photo");
  file.onchange = function() {
    if (file.files.length > 0) {
      document.getElementById("file-name").innerHTML = file.files[0].name;
      //console.log(file)
    }
  };
