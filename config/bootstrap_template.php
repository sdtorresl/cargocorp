<?php

return [
    'prevActive' => '<li class="page-item">
      <a class="page-link" href="{{url}}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>',
    'prevDisabled' => '<li class="page-item disabled">
      <a class="page-link" href="{{url}}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>',
    'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'nextActive' => '<li class="page-item">
      <a class="page-link" href="{{url}}" aria-label="Previous">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>',
    'nextDisabled' => '<li class="page-item disabled">
      <a class="page-link" href="{{url}}" aria-label="Previous">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>',
    'inputContainer' => '<div class="form-group" {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label class="form-control-label" {{attrs}}>{{text}}</label>',
    'select' => '<div class="form-group">{{label}}<select name="{{name}}" class="form-control" {{attrs}}>{{content}}</select></div>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'formGroup' => '{{label}}{{input}}',
    'textarea' => '<div class="form-group"><textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea></div>',
    'file' => '<div class="file-field"><div class="btn"><span>' . __('Upload') . '</span><input name="{{name}}" type="file"></div><div class="file-path-wrapper"><input class="file-path" {{attrs}}></div></div>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}" {{attrs}}>',
    'nestingLabel' => '{{hidden}}<p><label{{attrs}}>{{input}}<span>{{text}}</span></label></p>',
    'submitContainer' => '<div class="boton">{{content}}</div>',
    'inputSubmit' => '<input type="{{type}}" {{attrs}}/>',
];
