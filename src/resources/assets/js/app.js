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
    "body {font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: #757575;-webkit-font-smoothing: antialiased; }"
  ]
});

  u(".insert").on("click", function(e) {
    e.preventDefault();
    CKEDITOR.instances.content.insertHtml('<p><img src="http://staging.shawnsandy.design/imgfly/images/jarvis.jpeg?w=448&amp;h=340&amp;fit=crop-top" alt=""></p>');
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
    editItems: true,
    removeItems: true
}


var typeChoices = new Choices("#type", choicesConf);
var featuredChoices = new Choices("#featured", choicesConf);
var statusChoices = new Choices("#status", choicesConf);

var choicesSelect = {
    addItems: true,
    placeholder: true,
    addItems: true,
    editItems: true,
    removeItems: true,
    placeholderValue: ""
};

var categoryChoices = new Choices("#category", choicesSelect);
