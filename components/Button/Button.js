/**
 * This is a Text Input Element
 * 
 * Kreatx 2018
 */

//component definition
var Button = function(_props, overrided=false)
{  
    Object.defineProperty(this, "label", 
    {
        get: function label() 
        {
            return _label;
        },
        set: function label(v) 
        {
            if(_label != v)
            {
                _label = v;
                if(this.$el){
                    var last = this.$el.children().last();
                    if(last && last.length>0)
                        if(last[0].nextSibling)
                            last[0].nextSibling.textContent = v;
                        else
                            this.$el.appendText(v);
                    else
                        //this.$el.appendText(v);
                        this.$el.text(v);
                }
            }
        },
        enumerable:true
    });

    Object.defineProperty(this, "type", 
    {
        get: function type() 
        {
            return _type;
        },
        set: function type(v) 
        {
            if(_type != v)
            {
                _type = v;
                if(_type)
                {
                    if(this.$el)
                    {
                        this.$el.attr('type', _type);
                    }
                }else
                {
                    if(this.$el)
                    {
                        this.$el.removeAttr('_type');
                    }
                }                    
            }
        },
        enumerable:true
    });

    Object.defineProperty(this, "value", 
    {
        get: function value() 
        {
            return _value;
        },
        set: function value(v) 
        {
            if(_value != v)
            {
                _value = v;
                if(_value)
                {
                    if(this.$el)
                    {
                        this.$el.attr('value', _value);
                    }
                }else
                {
                    if(this.$el)
                    {
                        this.$el.removeAttr('value');
                    }
                }                    
            }
        },
        enumerable:true
    });

    this.template = function () 
    {
        return  "<button data-triggers='click' id='" + this.domID + "' type='"+_type+"'  "+(_value?"value='"+_value+"'":"")+"></button>";
    };


    var _defaultParams = {
        label:"",
        type:"button",
        components:[]
    };
    //_props = extend(false, false, _defaultParams, _props);
    shallowCopy(extend(false, false, _defaultParams, _props), _props);
    var _label;
    var _type = _props.type;
    var _value; 
    var _afterAttach = _props.afterAttach;

    _props.afterAttach = function () {
        if (typeof _afterAttach == 'function')
            _afterAttach.apply(this, arguments);

        var e = arguments[0];
        if (!e.isDefaultPrevented()) {
            if(_props.label)
                this.label = _props.label;
            if(_props.value)
                this.value = _props.value;
        }
    };

   // Component.call(this, _props);
    Parent.call(this, _props);
    if(overrided)
    {
        this.keepBase();
    }
};
Button.prototype.ctor = 'Button';