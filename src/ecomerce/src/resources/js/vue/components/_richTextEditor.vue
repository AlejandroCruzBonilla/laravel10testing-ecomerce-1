<template>
  <slot name="label"></slot>
  <ckeditor
    :id="id"
    :name="name"
    :rows="10"
    :editor="editor"
    :config="editorConfig"
    :model-value="editorData"
    :disableTwoWayDataBinding="false"
    @input="onEditorInput"
    @ready="onReady"
    tag-name="textarea">
  </ckeditor>
</template>

<script>
import { ref, onMounted } from 'vue';


import { ClassicEditor } from '@ckeditor/ckeditor5-editor-classic';
//Plugins
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment.js';
import AutoImage from '@ckeditor/ckeditor5-image/src/autoimage.js';
import Autoformat from '@ckeditor/ckeditor5-autoformat/src/autoformat.js';
import AutoLink from '@ckeditor/ckeditor5-link/src/autolink.js';
import BlockQuote from '@ckeditor/ckeditor5-block-quote/src/blockquote.js';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold.js';
import CloudServices from '@ckeditor/ckeditor5-cloud-services/src/cloudservices.js';
import Code from '@ckeditor/ckeditor5-basic-styles/src/code.js';
import DataFilter from '@ckeditor/ckeditor5-html-support/src/datafilter.js';
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials.js';
import FindAndReplace from '@ckeditor/ckeditor5-find-and-replace/src/findandreplace.js';
import FontBackgroundColor from '@ckeditor/ckeditor5-font/src/fontbackgroundcolor.js';
import FontColor from '@ckeditor/ckeditor5-font/src/fontcolor.js';
import FontFamily from '@ckeditor/ckeditor5-font/src/fontfamily.js';
import FontSize from '@ckeditor/ckeditor5-font/src/fontsize.js';
import GeneralHtmlSupport from '@ckeditor/ckeditor5-html-support/src/generalhtmlsupport.js';
import Heading from '@ckeditor/ckeditor5-heading/src/heading.js';
import Highlight from '@ckeditor/ckeditor5-highlight/src/highlight.js';
import HorizontalLine from '@ckeditor/ckeditor5-horizontal-line/src/horizontalline.js';
import HtmlComment from '@ckeditor/ckeditor5-html-support/src/htmlcomment.js';
import HtmlEmbed from '@ckeditor/ckeditor5-html-embed/src/htmlembed.js';
import Image from '@ckeditor/ckeditor5-image/src/image.js';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption.js';
import ImageInsert from '@ckeditor/ckeditor5-image/src/imageinsert.js';
import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize.js';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle.js';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar.js';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload.js';
import Indent from '@ckeditor/ckeditor5-indent/src/indent.js';
import IndentBlock from '@ckeditor/ckeditor5-indent/src/indentblock.js';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic.js';
import Link from '@ckeditor/ckeditor5-link/src/link.js';
import LinkImage from '@ckeditor/ckeditor5-link/src/linkimage.js';
import List from '@ckeditor/ckeditor5-list/src/list.js';
import ListProperties from '@ckeditor/ckeditor5-list/src/listproperties.js';
import MediaEmbed from '@ckeditor/ckeditor5-media-embed/src/mediaembed.js';
import PageBreak from '@ckeditor/ckeditor5-page-break/src/pagebreak.js';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph.js';
import PasteFromOffice from '@ckeditor/ckeditor5-paste-from-office/src/pastefromoffice.js';
import RemoveFormat from '@ckeditor/ckeditor5-remove-format/src/removeformat.js';
import SelectAll from '@ckeditor/ckeditor5-select-all/src/selectall.js';
import ShowBlocks from '@ckeditor/ckeditor5-show-blocks/src/showblocks.js';
import SourceEditing from '@ckeditor/ckeditor5-source-editing/src/sourceediting.js';
import Strikethrough from '@ckeditor/ckeditor5-basic-styles/src/strikethrough.js';
import Style from '@ckeditor/ckeditor5-style/src/style.js';
import Subscript from '@ckeditor/ckeditor5-basic-styles/src/subscript.js';
import Superscript from '@ckeditor/ckeditor5-basic-styles/src/superscript.js';
import Table from '@ckeditor/ckeditor5-table/src/table.js';
import TableCaption from '@ckeditor/ckeditor5-table/src/tablecaption.js';
import TableCellProperties from '@ckeditor/ckeditor5-table/src/tablecellproperties';
import TableColumnResize from '@ckeditor/ckeditor5-table/src/tablecolumnresize.js';
import TableToolbar from '@ckeditor/ckeditor5-table/src/tabletoolbar.js';
import TextTransformation from '@ckeditor/ckeditor5-typing/src/texttransformation.js';
import TodoList from '@ckeditor/ckeditor5-list/src/todolist';
import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline.js';
import WordCount from '@ckeditor/ckeditor5-word-count/src/wordcount.js';

export default {

  props: {
    id: {
      type: String,
      required: true
    },

    name: {
      type: String,
      required: true
    },

    value: {
      type: String,
      default: ""
    },
  },

  setup({ value }) {
    const editor = ClassicEditor;



    const editorConfig = {
      plugins: [
        Alignment,
        AutoImage,
        Autoformat,
        AutoLink,
        BlockQuote,
        Bold,
        CloudServices,
        Code,
        DataFilter,
        Essentials,
        FindAndReplace,
        FontBackgroundColor,
        FontColor,
        FontFamily,
        FontSize,
        GeneralHtmlSupport,
        Heading,
        Highlight,
        HorizontalLine,
        HtmlComment,
        HtmlEmbed,
        Image,
        ImageCaption,
        ImageInsert,
        ImageResize,
        ImageStyle,
        ImageToolbar,
        ImageUpload,
        Indent,
        IndentBlock,
        Italic,
        Link,
        LinkImage,
        List,
        ListProperties,
        MediaEmbed,
        PageBreak,
        Paragraph,
        PasteFromOffice,
        RemoveFormat,
        SelectAll,
        ShowBlocks,
        SourceEditing,
        Strikethrough,
        // Style,
        Subscript,
        Superscript,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableToolbar,
        TextTransformation,
        TodoList,
        Underline,
        WordCount
      ],
      toolbar: {
        items: [
          'undo', 'redo', 'findAndReplace',
          '|', 'heading',
          '|', 'bold', 'italic', 'alignment', 'fontBackgroundColor', 'fontColor', 'fontFamily', 'fontSize',
          '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent', 'blockQuote',
          '|', 'highlight', 'underline', 'strikethrough', 'horizontalLine', 'subscript', 'superscript', 'code',
          '|', 'removeFormat',
          '|', 'selectAll', 'showBlocks', 'sourceEditing', 'htmlEmbed',
          '|', 'link', 'imageUpload', 'imageInsert', 'mediaEmbed', 'insertTable', 'pageBreak',
          '|', // 'style',
        ],
        shouldNotGroupWhenFull: true
      },
      image: {
        toolbar: [
          'imageTextAlternative',
          'toggleImageCaption',
          'imageStyle:inline',
          'imageStyle:block',
          'imageStyle:side',
          'linkImage'
        ]
      },
      table: {
        contentToolbar: [
          'tableColumn',
          'tableRow',
          'mergeTableCells',
          'tableCellProperties'
        ]
      },
      heading: {
        options: [
          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
          { model: 'heading1', view: { name: 'h1', classes: 'text-5xl' }, title: 'Heading 1', class: 'ck-heading_heading1' },
          { model: 'heading2', view: { name: 'h2', classes: 'text-4xl' }, title: 'Heading 2', class: 'ck-heading_heading2' },
          { model: 'heading3', view: { name: 'h3', classes: 'text-3xl' }, title: 'Heading 3', class: 'ck-heading_heading3' },

        ]
      },
      htmlSupport: {
        allow: [
          {
            classes: true,
          }
        ],
        disallow: []
      }
    }

    const editorData = ref(value);


    const emptyEditor = () => {
      editorData.value = '';
    }

    const onEditorInput = (event) => {
      editorData.value = event;
    }

    const onReady = (editor) => {
      // You can store the "editor" and use when it is needed.
      // console.log("Editor is ready to use!", editor.editing.view);
      // console.log("Editor is ready to use!", editor.editing.view.document.getRoot())
      // console.log("Editor is ready to use!", editor.editing.view.getDomRoot().parentNode)

      // editor.editing.view.change((writer) => {
      //   writer.setStyle({
      //     'min-height': '250px',
      //     'max-height': '250px'
      //   }, editor.editing.view.document.getRoot())
      // });
    }

    return {
      editor,
      editorConfig,
      editorData,

      // methods
      emptyEditor,
      onEditorInput,
      onReady
    }
  }
}
</script>

