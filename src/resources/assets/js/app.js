var storyEditor = document.getElementById("content");
CKEDITOR.replace(storyEditor, {
  height: 400,
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
  extraPlugins: "codesnippet",
  codeSnippet_theme: "monokai_sublime",
  contentsCss: [
    "body {font-size: 16px;font-family: Arial, Helvetica, sans-serif;color: #757575;-webkit-font-smoothing: antialiased; line-height: 1.6; }"
  ]
});

    u(".insert-images-button").each(function(el, i) {
      u(el).on("click", function(e) {
        var image = u(el).data("img");
        console.log("image click " + image);
        CKEDITOR.instances.content.insertHtml('<img src="' + image + '" alt="">');
      });
    });

  u(".insert").on("click", function(e) {
    e.preventDefault();
    CKEDITOR.instances.content.insertHtml('<p><img src="http://staging.shawnsandy.design/imgfly/images/jarvis.jpeg?w=448&amp;h=340&amp;fit=crop-top" alt=""></p>');
  });

  u(".insert-video-button").on("click", function(e){

      e.preventDefault();
      console.log("video box");
    //   var vid = document.getElementById("video-embed").value;
      var vid = u('#video-embed').attr("value");
      console.log(vid);
      CKEDITOR.instances.content.insertHtml(vid);

  })

//   u(".code-insert-button").on("click", function(e){

//       e.preventDefault();
//       console.log("code box");
//     //   var vid = document.getElementById("video-embed").value;
//       var code = document.getElementById("code-box").value;
//       console.log(code);
//       CKEDITOR.instances.content.insertHtml("<pre><code>"+code+"</pre></code>");

//   })

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
