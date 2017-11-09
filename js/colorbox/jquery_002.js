// ColorBox v1.3.20.1 - jQuery lightbox plugin
// (c) 2012 Jack Moore - jacklmoore.com
// License: http://www.opensource.org/licenses/mit-license.php
(function(e,t,n){
    function G(n,r,i){
        var o=t.createElement(n);
        return r&&(o.id=s+r),i&&(o.style.cssText=i),e(o)
        }
        function Y(e){
        var t=T.length,n=(U+e)%t;
        return n<0?t+n:n
        }
        function Z(e,t){
        return Math.round((/%/.test(e)?(t==="x"?tt():nt())/100:1)*parseInt(e,10))
        }
        function et(e){
        return B.photo||/\.(gif|png|jp(e|g|eg)|bmp|ico)((#|\?).*)?$/i.test(e)
        }
        function tt(){
        return n.innerWidth||N.width()
        }
        function nt(){
        return n.innerHeight||N.height()
        }
        function rt(){
        var t,n=e.data(R,i);
        n==null?(B=e.extend({},r),console&&console.log&&console.log("Error: cboxElement missing settings object")):B=e.extend({},n);
        for(t in B)e.isFunction(B[t])&&t.slice(0,2)!=="on"&&(B[t]=B[t].call(R));B.rel=B.rel||R.rel||"nofollow",B.href=B.href||e(R).attr("href"),B.title=B.title||R.title,typeof B.href=="string"&&(B.href=e.trim(B.href))
        }
        function it(t,n){
        e.event.trigger(t),n&&n.call(R)
        }
        function st(){
        var e,t=s+"Slideshow_",n="click."+s,r,i,o;
        B.slideshow&&T[1]?(r=function(){
            M.text(B.slideshowStop).unbind(n).bind(f,function(){
                if(B.loop||T[U+1])e=setTimeout(J.next,B.slideshowSpeed)
                    }).bind(a,function(){
                clearTimeout(e)
                }).one(n+" "+l,i),g.removeClass(t+"off").addClass(t+"on"),e=setTimeout(J.next,B.slideshowSpeed)
            },i=function(){
            clearTimeout(e),M.text(B.slideshowStart).unbind([f,a,l,n].join(" ")).one(n,function(){
                J.next(),r()
                }),g.removeClass(t+"on").addClass(t+"off")
            },B.slideshowAuto?r():i()):g.removeClass(t+"off "+t+"on")
        }
        function ot(t){
        V||(R=t,rt(),T=e(R),U=0,B.rel!=="nofollow"&&(T=e("."+o).filter(function(){
            var t=e.data(this,i),n;
            return t&&(n=t.rel||this.rel),n===B.rel
            }),U=T.index(R),U===-1&&(T=T.add(R),U=T.length-1)),W||(W=X=!0,g.show(),B.returnFocus&&e(R).blur().one(c,function(){
            e(this).focus()
            }),m.css({
            opacity:+B.opacity,
            cursor:B.overlayClose?"pointer":"auto"
            }).show(),B.w=Z(B.initialWidth,"x"),B.h=Z(B.initialHeight,"y"),J.position(),d&&N.bind("resize."+v+" scroll."+v,function(){
            m.css({
                width:tt(),
                height:nt(),
                top:N.scrollTop(),
                left:N.scrollLeft()
                })
            }).trigger("resize."+v),it(u,B.onOpen),H.add(A).hide(),P.html(B.close).show()),J.load(!0))
        }
        function ut(){
        !g&&t.body&&(Q=!1,N=e(n),g=G(K).attr({
            id:i,
            "class":p?s+(d?"IE6":"IE"):""
            }).hide(),m=G(K,"Overlay",d?"position:absolute":"").hide(),L=G(K,"LoadingOverlay").add(G(K,"LoadingGraphic")),y=G(K,"Wrapper"),b=G(K,"Content").append(C=G(K,"LoadedContent","width:0; height:0; overflow:hidden"),A=G(K,"Title"),O=G(K,"Current"),_=G(K,"Next"),D=G(K,"Previous"),M=G(K,"Slideshow").bind(u,st),P=G(K,"Close")),y.append(G(K).append(G(K,"TopLeft"),w=G(K,"TopCenter"),G(K,"TopRight")),G(K,!1,"clear:left").append(E=G(K,"MiddleLeft"),b,S=G(K,"MiddleRight")),G(K,!1,"clear:left").append(G(K,"BottomLeft"),x=G(K,"BottomCenter"),G(K,"BottomRight"))).find("div div").css({
            "float":"left"
        }),k=G(K,!1,"position:absolute; width:9999px; visibility:hidden; display:none"),H=_.add(D).add(O).add(M),e(t.body).append(m,g.append(y,k)))
        }
        function at(){
        return g?(Q||(Q=!0,j=w.height()+x.height()+b.outerHeight(!0)-b.height(),F=E.width()+S.width()+b.outerWidth(!0)-b.width(),I=C.outerHeight(!0),q=C.outerWidth(!0),g.css({
            "padding-bottom":j,
            "padding-right":F
        }),_.click(function(){
            J.next()
            }),D.click(function(){
            J.prev()
            }),P.click(function(){
            J.close()
            }),m.click(function(){
            B.overlayClose&&J.close()
            }),e(t).bind("keydown."+s,function(e){
            var t=e.keyCode;
            W&&B.escKey&&t===27&&(e.preventDefault(),J.close()),W&&B.arrowKey&&T[1]&&(t===37?(e.preventDefault(),D.click()):t===39&&(e.preventDefault(),_.click()))
            }),e("."+o,t).live("click",function(e){
            e.which>1||e.shiftKey||e.altKey||e.metaKey||(e.preventDefault(),ot(this))
            })),!0):!1
        }
        var r={
        transition:"elastic",
        speed:300,
        width:!1,
        initialWidth:"600",
        innerWidth:!1,
        maxWidth:!1,
        height:!1,
        initialHeight:"450",
        innerHeight:!1,
        maxHeight:!1,
        scalePhotos:!0,
        scrolling:!0,
        inline:!1,
        html:!1,
        iframe:!1,
        fastIframe:!0,
        photo:!1,
        href:!1,
        title:!1,
        rel:!1,
        opacity:.9,
        preloading:!0,
        current:"image {current} of {total}",
        previous:"previous",
        next:"next",
        close:"<input type='button' name='close' value='Close' />",
        xhrError:"This content failed to load.",
        imgError:"This image failed to load.",
        open:!1,
        returnFocus:!0,
        reposition:!0,
        loop:!0,
        slideshow:!1,
        slideshowAuto:!0,
        slideshowSpeed:2500,
        slideshowStart:"start slideshow",
        slideshowStop:"stop slideshow",
        onOpen:!1,
        onLoad:!1,
        onComplete:!1,
        onCleanup:!1,
        onClosed:!1,
        overlayClose:!0,
        escKey:!0,
        arrowKey:!0,
        top:!1,
        bottom:!1,
        left:!1,
        right:!1,
        fixed:!1,
        data:undefined
    },i="colorbox",s="cbox",o=s+"Element",u=s+"_open",a=s+"_load",f=s+"_complete",l=s+"_cleanup",c=s+"_closed",h=s+"_purge",p=!e.support.opacity&&!e.support.style,d=p&&!n.XMLHttpRequest,v=s+"_IE6",m,g,y,b,w,E,S,x,T,N,C,k,L,A,O,M,_,D,P,H,B,j,F,I,q,R,U,z,W,X,V,$,J,K="div",Q;
    if(e.colorbox)return;
    e(ut),J=e.fn[i]=e[i]=function(t,n){
        var s=this;
        t=t||{},ut();
        if(at()){
            if(!s[0]){
                if(s.selector)return s;
                s=e("<a/>"),t.open=!0
                }
                n&&(t.onComplete=n),s.each(function(){
                e.data(this,i,e.extend({},e.data(this,i)||r,t))
                }).addClass(o),(e.isFunction(t.open)&&t.open.call(s)||t.open)&&ot(s[0])
            }
            return s
        },J.position=function(e,t){
        function f(e){
            w[0].style.width=x[0].style.width=b[0].style.width=e.style.width,b[0].style.height=E[0].style.height=S[0].style.height=e.style.height
            }
            var n,r=0,i=0,o=g.offset(),u,a;
        N.unbind("resize."+s),g.css({
            top:-9e4,
            left:-9e4
        }),u=N.scrollTop(),a=N.scrollLeft(),B.fixed&&!d?(o.top-=u,o.left-=a,g.css({
            position:"fixed"
        })):(r=u,i=a,g.css({
            position:"absolute"
        })),B.right!==!1?i+=Math.max(tt()-B.w-q-F-Z(B.right,"x"),0):B.left!==!1?i+=Z(B.left,"x"):i+=Math.round(Math.max(tt()-B.w-q-F,0)/2),B.bottom!==!1?r+=Math.max(nt()-B.h-I-j-Z(B.bottom,"y"),0):B.top!==!1?r+=Z(B.top,"y"):r+=Math.round(Math.max(nt()-B.h-I-j,0)/2),g.css({
            top:o.top,
            left:o.left
            }),e=g.width()===B.w+q&&g.height()===B.h+I?0:e||0,y[0].style.width=y[0].style.height="9999px",n={
            width:B.w+q,
            height:B.h+I,
            top:r,
            left:i
        },e===0&&g.css(n),g.dequeue().animate(n,{
            duration:e,
            complete:function(){
                f(this),X=!1,y[0].style.width=B.w+q+F+"px",y[0].style.height=B.h+I+j+"px",B.reposition&&setTimeout(function(){
                    N.bind("resize."+s,J.position)
                    },1),t&&t()
                },
            step:function(){
                f(this)
                }
            })
    },J.resize=function(e){
    W&&(e=e||{},e.width&&(B.w=Z(e.width,"x")-q-F),e.innerWidth&&(B.w=Z(e.innerWidth,"x")),C.css({
        width:B.w
        }),e.height&&(B.h=Z(e.height,"y")-I-j),e.innerHeight&&(B.h=Z(e.innerHeight,"y")),!e.innerHeight&&!e.height&&(C.css({
        height:"auto"
    }),B.h=C.height()),C.css({
        height:B.h
        }),J.position(B.transition==="none"?0:B.speed))
    },J.prep=function(t){
    function o(){
        return B.w=B.w||C.width(),B.w=B.mw&&B.mw<B.w?B.mw:B.w,B.w
        }
        function u(){
        return B.h=B.h||C.height(),B.h=B.mh&&B.mh<B.h?B.mh:B.h,B.h
        }
        if(!W)return;
    var n,r=B.transition==="none"?0:B.speed;
    C.remove(),C=G(K,"LoadedContent").append(t),C.hide().appendTo(k.show()).css({
        width:o(),
        overflow:B.scrolling?"auto":"hidden"
        }).css({
        height:u()
        }).prependTo(b),k.hide(),e(z).css({
        "float":"none"
    }),d&&e("select").not(g.find("select")).filter(function(){
        return this.style.visibility!=="hidden"
        }).css({
        visibility:"hidden"
    }).one(l,function(){
        this.style.visibility="inherit"
        }),n=function(){
        function y(){
            p&&g[0].style.removeAttribute("filter")
            }
            var t,n,o=T.length,u,a="frameBorder",l="allowTransparency",c,d,v,m;
        if(!W)return;
        c=function(){
            clearTimeout($),L.detach().hide(),it(f,B.onComplete)
            },p&&z&&C.fadeIn(100),A.html(B.title).add(C).show();
        if(o>1){
            typeof B.current=="string"&&O.html(B.current.replace("{current}",U+1).replace("{total}",o)).show(),_[B.loop||U<o-1?"show":"hide"]().html(B.next),D[B.loop||U?"show":"hide"]().html(B.previous),B.slideshow&&M.show();
            if(B.preloading){
                t=[Y(-1),Y(1)];
                while(n=T[t.pop()])m=e.data(n,i),m&&m.href?(d=m.href,e.isFunction(d)&&(d=d.call(n))):d=n.href,et(d)&&(v=new Image,v.src=d)
                    }
                }else H.hide();
    B.iframe?(u=G("iframe")[0],a in u&&(u[a]=0),l in u&&(u[l]="true"),u.name=s+ +(new Date),B.fastIframe?c():e(u).one("load",c),u.src=B.href,B.scrolling||(u.scrolling="no"),e(u).addClass(s+"Iframe").appendTo(C).one(h,function(){
        u.src="//about:blank"
        })):c(),B.transition==="fade"?g.fadeTo(r,1,y):y()
    },B.transition==="fade"?g.fadeTo(r,0,function(){
    J.position(0,n)
    }):J.position(r,n)
    },J.load=function(t){
    var n,r,i=J.prep;
    X=!0,z=!1,R=T[U],t||rt(),it(h),it(a,B.onLoad),B.h=B.height?Z(B.height,"y")-I-j:B.innerHeight&&Z(B.innerHeight,"y"),B.w=B.width?Z(B.width,"x")-q-F:B.innerWidth&&Z(B.innerWidth,"x"),B.mw=B.w,B.mh=B.h,B.maxWidth&&(B.mw=Z(B.maxWidth,"x")-q-F,B.mw=B.w&&B.w<B.mw?B.w:B.mw),B.maxHeight&&(B.mh=Z(B.maxHeight,"y")-I-j,B.mh=B.h&&B.h<B.mh?B.h:B.mh),n=B.href,$=setTimeout(function(){
        L.show().appendTo(b)
        },100),B.inline?(G(K).hide().insertBefore(e(n)[0]).one(h,function(){
        e(this).replaceWith(C.children())
        }),i(e(n))):B.iframe?i(" "):B.html?i(B.html):et(n)?(e(z=new Image).addClass(s+"Photo").error(function(){
        B.title=!1,i(G(K,"Error").html(B.imgError))
        }).load(function(){
        var e;
        z.onload=null,B.scalePhotos&&(r=function(){
            z.height-=z.height*e,z.width-=z.width*e
            },B.mw&&z.width>B.mw&&(e=(z.width-B.mw)/z.width,r()),B.mh&&z.height>B.mh&&(e=(z.height-B.mh)/z.height,r())),B.h&&(z.style.marginTop=Math.max(B.h-z.height,0)/2+"px"),T[1]&&(B.loop||T[U+1])&&(z.style.cursor="pointer",z.onclick=function(){
            J.next()
            }),p&&(z.style.msInterpolationMode="bicubic"),setTimeout(function(){
            i(z)
            },1)
        }),setTimeout(function(){
        z.src=n
        },1)):n&&k.load(n,B.data,function(t,n,r){
        i(n==="error"?G(K,"Error").html(B.xhrError):e(this).contents())
        })
    },J.next=function(){
    !X&&T[1]&&(B.loop||T[U+1])&&(U=Y(1),J.load())
    },J.prev=function(){
    !X&&T[1]&&(B.loop||U)&&(U=Y(-1),J.load())
    },J.close=function(){
    W&&!V&&(V=!0,W=!1,it(l,B.onCleanup),N.unbind("."+s+" ."+v),m.fadeTo(200,0),g.stop().fadeTo(300,0,function(){
        g.add(m).css({
            opacity:1,
            cursor:"auto"
        }).hide(),it(h),C.remove(),setTimeout(function(){
            V=!1,it(c,B.onClosed)
            },1)
        }))
    },J.remove=function(){
    e([]).add(g).add(m).remove(),g=null,e("."+o).removeData(i).removeClass(o).die()
    },J.element=function(){
    return e(R)
    },J.settings=r
})(jQuery,document,this);