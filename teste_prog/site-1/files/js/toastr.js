! function(a) {
    a(["jquery"], function(b) {
        return function() {
            function L(c, f, d) {
                return z({
                    type: H.error,
                    iconClass: E().iconClasses.error,
                    message: c,
                    optionsOverride: d,
                    title: f
                })
            }

            function F(d, c) {
                return d || (d = E()), P = b("#" + d.containerId), P.length ? P : (c && (P = x(d)), P)
            }

            function G(c, f, d) {
                return z({
                    type: H.info,
                    iconClass: E().iconClasses.info,
                    message: c,
                    optionsOverride: d,
                    title: f
                })
            }

            function K(c) {
                q = c
            }

            function B(c, f, d) {
                return z({
                    type: H.success,
                    iconClass: E().iconClasses.success,
                    message: c,
                    optionsOverride: d,
                    title: f
                })
            }

            function e(c, f, d) {
                return z({
                    type: H.warning,
                    iconClass: E().iconClasses.warning,
                    message: c,
                    optionsOverride: d,
                    title: f
                })
            }

            function J(c, f) {
                var d = E();
                P || F(d), N(c, d, f) || D(d)
            }

            function k(d) {
                var c = E();
                return P || F(c), d && 0 === b(":focus", d).length ? void A(d) : void(P.children().length && P.remove())
            }

            function D(f) {
                for (var c = P.children(), d = c.length - 1; d >= 0; d--) {
                    N(b(c[d]), f)
                }
            }

            function N(g, c, d) {
                var f = !(!d || !d.force) && d.force;
                return !(!g || !f && 0 !== b(":focus", g).length) && (g[c.hideMethod]({
                    duration: c.hideDuration,
                    easing: c.hideEasing,
                    complete: function() {
                        A(g)
                    }
                }), !0)
            }

            function x(c) {
                return P = b("<div/>").attr("id", c.containerId).addClass(c.positionClass), P.appendTo(b(c.target)), P
            }

            function I() {
                return {
                    tapToDismiss: !0,
                    toastClass: "toast",
                    containerId: "toast-container",
                    debug: !1,
                    showMethod: "fadeIn",
                    showDuration: 300,
                    showEasing: "swing",
                    onShown: void 0,
                    hideMethod: "fadeOut",
                    hideDuration: 1000,
                    hideEasing: "swing",
                    onHidden: void 0,
                    closeMethod: !1,
                    closeDuration: !1,
                    closeEasing: !1,
                    closeOnHover: !0,
                    extendedTimeOut: 1000,
                    iconClasses: {
                        error: "toast-error",
                        info: "toast-info",
                        success: "toast-success",
                        warning: "toast-warning"
                    },
                    iconClass: "toast-info",
                    positionClass: "toast-top-right",
                    timeOut: 5000,
                    titleClass: "toast-title",
                    messageClass: "toast-message",
                    escapeHtml: !1,
                    target: "body",
                    closeHtml: '<button type="button">&times;</button>',
                    closeClass: "toast-close-button",
                    newestOnTop: !0,
                    preventDuplicates: !1,
                    progressBar: !1,
                    progressClass: "toast-progress",
                    rtl: !1
                }
            }

            function y(c) {
                q && q(c)
            }

            function z(aj) {
                function ac(c) {
                    return null == c && (c = ""), c.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;")
                }

                function ai() {
                    n(), ak(), w(), ae(), U(), v(), aa(), W()
                }

                function W() {
                    var c = "";
                    switch (aj.iconClass) {
                        case "toast-success":
                        case "toast-info":
                            c = "polite";
                            break;
                        default:
                            c = "assertive"
                    }
                    X.attr("aria-live", c)
                }

                function f() {
                    S.closeOnHover && X.hover(V, R), !S.onclick && S.tapToDismiss && X.click(h), S.closeButton && Y && Y.click(function(c) {
                        c.stopPropagation ? c.stopPropagation() : void 0 !== c.cancelBubble && c.cancelBubble !== !0 && (c.cancelBubble = !0), S.onCloseClick && S.onCloseClick(c), h(!0)
                    }), S.onclick && X.click(function(c) {
                        S.onclick(c), h()
                    })
                }

                function ah() {
                    X.hide(), X[S.showMethod]({
                        duration: S.showDuration,
                        easing: S.showEasing,
                        complete: S.onShown
                    }), S.timeOut > 0 && (Z = setTimeout(h, S.timeOut), T.maxHideTime = parseFloat(S.timeOut), T.hideEta = (new Date).getTime() + T.maxHideTime, S.progressBar && (T.intervalId = setInterval(al, 10)))
                }

                function n() {
                    aj.iconClass && X.addClass(S.toastClass).addClass(am)
                }

                function aa() {
                    S.newestOnTop ? P.prepend(X) : P.append(X)
                }

                function ak() {
                    if (aj.title) {
                        var c = aj.title;
                        S.escapeHtml && (c = ac(aj.title)), ab.append(c).addClass(S.titleClass), X.append(ab)
                    }
                }

                function w() {
                    if (aj.message) {
                        var c = aj.message;
                        S.escapeHtml && (c = ac(aj.message)), m.append(c).addClass(S.messageClass), X.append(m)
                    }
                }

                function ae() {
                    S.closeButton && (Y.addClass(S.closeClass).attr("role", "button"), X.prepend(Y))
                }

                function U() {
                    S.progressBar && (ag.addClass(S.progressClass), X.prepend(ag))
                }

                function v() {
                    S.rtl && X.addClass("rtl")
                }

                function ad(c, d) {
                    if (c.preventDuplicates) {
                        if (d.message === Q) {
                            return !0
                        }
                        Q = d.message
                    }
                    return !1
                }

                function h(i) {
                    var c = i && S.closeMethod !== !1 ? S.closeMethod : S.hideMethod,
                        d = i && S.closeDuration !== !1 ? S.closeDuration : S.hideDuration,
                        g = i && S.closeEasing !== !1 ? S.closeEasing : S.hideEasing;
                    if (!b(":focus", X).length || i) {
                        return clearTimeout(T.intervalId), X[c]({
                            duration: d,
                            easing: g,
                            complete: function() {
                                A(X), clearTimeout(Z), S.onHidden && "hidden" !== af.state && S.onHidden(), af.state = "hidden", af.endTime = new Date, y(af)
                            }
                        })
                    }
                }

                function R() {
                    (S.timeOut > 0 || S.extendedTimeOut > 0) && (Z = setTimeout(h, S.extendedTimeOut), T.maxHideTime = parseFloat(S.extendedTimeOut), T.hideEta = (new Date).getTime() + T.maxHideTime)
                }

                function V() {
                    clearTimeout(Z), T.hideEta = 0, X.stop(!0, !0)[S.showMethod]({
                        duration: S.showDuration,
                        easing: S.showEasing
                    })
                }

                function al() {
                    var c = (T.hideEta - (new Date).getTime()) / T.maxHideTime * 100;
                    ag.width(c + "%")
                }
                var S = E(),
                    am = aj.iconClass || S.iconClass;
                if ("undefined" != typeof aj.optionsOverride && (S = b.extend(S, aj.optionsOverride), am = aj.optionsOverride.iconClass || am), !ad(S, aj)) {
                    M++, P = F(S, !0);
                    var Z = null,
                        X = b("<div/>"),
                        ab = b("<div/>"),
                        m = b("<div/>"),
                        ag = b("<div/>"),
                        Y = b(S.closeHtml),
                        T = {
                            intervalId: null,
                            hideEta: null,
                            maxHideTime: null
                        },
                        af = {
                            toastId: M,
                            state: "visible",
                            startTime: new Date,
                            options: S,
                            map: aj
                        };
                    return ai(), ah(), f(), y(af), S.debug && console && console.log(af), X
                }
            }

            function E() {
                return b.extend({}, I(), j.options)
            }

            function A(c) {
                P || (P = F()), c.is(":visible") || (c.remove(), c = null, 0 === P.children().length && (P.remove(), Q = void 0))
            }
            var P, q, Q, M = 0,
                H = {
                    error: "error",
                    info: "info",
                    success: "success",
                    warning: "warning"
                },
                j = {
                    clear: J,
                    remove: k,
                    error: L,
                    getContainer: F,
                    info: G,
                    options: {},
                    subscribe: K,
                    success: B,
                    version: "2.1.3",
                    warning: e
                };
            return j
        }()
    })
}("function" == typeof define && define.amd ? define : function(a, b) {
    "undefined" != typeof module && module.exports ? module.exports = b(require("jquery")) : window.toastr = b(window.jQuery)
});