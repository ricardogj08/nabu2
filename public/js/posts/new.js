/**
 * Instancia y configuración
 * del editor de Markdown.
 */
const easyMDE = new EasyMDE({
  element: document.getElementById('body'),
  placeholder: 'Escribe lo que tienes para compartir...',
  autofocus: false,
  autosave: { // Delay between saves, in milliseconds.
    enabled: true,
    uniqueId: 'MyUniqueID',
    delay: 1000, // 1s
    submit_delay: 5000, // if the submit failed, 0.5s to save
    timeFormat: {
      locale: 'es-MX',
      format: {
        year: 'numeric',
        month: 'short',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit'
      }
    },
    text: 'Autosaved: '
  },
  unorderedListStyle: '*', // usar - y * para list bullet
  forceSync: true, // force text changes made in EasyMDE to be immediately stored in original text area.
  // insertTexts: {
  //     horizontalRule: ["", "\n\n-----\n\n"],
  //     image: ["![](http://", ")"],
  //     link: ["[", "](https://)"],
  //     table: ["", "\n\n| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text      | Text     |\n\n"],
  // }

  parsingConfig: {
    allowAtxHeaderWithoutSpace: true, // render header after space
    strikethrough: false,
    underscoresBreakWords: true // 3 underscores to delimited
  },
  imageMaxSize: 1024 * 1024,
  shortcuts: {
    drawTable: 'Ctrl-Alt-T'
  },
  spellChecker: false,
  sideBySideFullscreen: false,
  status: ['autosave', 'lines', 'words', 'cursor'],
  showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'clean-block', 'horizontal-rule'],
  promptURLs: false // a JS alert window appears asking for the link or image URL.

  // Otras opciones de configuración.
  // uploadImage: true, // enables the image upload functionality
  // promptTexts: {
  //     image: "Custom prompt for URL:",
  //     link: "Custom prompt for URL:"
  // }
  // syncSideBySidePreviewScroll: false,
  // previewClass: "my-custom-styling", // class of CSS to customized the editor-preview
  // lineNumbers: true
});
