var storyEditor = document.getElementById("content");
CKEDITOR.replace(storyEditor, {
  height: 300,
  toolbarCanCollapse: true,
  // Define the toolbar groups as it is a more accessible solution.
  toolbarGroups: [
    {
      name: "basicstyles",
      groups: ["basicstyles"]
    },
    {
      name: "links",
      groups: ["links"]
    },
    {
      name: "paragraph",
      groups: ["list", "blocks"]
    },
    {
      name: "document",
      groups: ["mode"]
    },
    {
      name: "insert",
      groups: ["insert"]
    },
    {
      name: "styles",
      groups: ["styles"]
    }
  ],
  contentsCss: [
    "body {font-size: 18px;font-family: Arial, Helvetica, sans-serif;color: #414141;-webkit-font-smoothing: antialiased; }"
  ]
});

var file = document.getElementById("cover-photo");
file.onchange = function () {
    if (file.files.length > 0) {
        document.getElementById("file-name").innerHTML = file.files[0].name;
        //console.log(file)
    }
};

var choicesConf = {
    addItems: true,
    placeholder: true,
    addItems: true,
    removeItems: true,
    placeholderValue: "Select a category for your story"
}


var typeChoices = new Choices("#type", choicesConf);
var featuredChoices = new Choices("#featured", choicesConf);
var statusChoices = new Choices("#status", choicesConf);

var choicesSelect = {
    addItems: true,
    placeholder: true,
    addItems: true,
    removeItems: true,
    placeholderValue: "Select a category for your story"
};

var categoryChoices = new Choices("#category", choicesSelect);
