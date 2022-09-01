<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js" integrity="sha512-cp+S0Bkyv7xKBSbmjJR0K7va0cor7vHYhETzm2Jy//ZTQDUvugH/byC4eWuTii9o5HN9msulx2zqhEXWau20Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    var dateStart = new Date();
    dateStart.setDate(dateStart.getDate());
    $('#date_start').datepicker({
        format: 'dd-mm-yyyy',
        language: 'th',
        startDate: dateStart,
        endDate: dateEnd 
    });
    if (typeof $.fn.datepicker === 'undefined') {
        throw new Error('Load bootstrap-datepicker first !!!');
    }

    var DPGlobal = $.fn.datepicker.DPGlobal
        , adjYear = 543
        , currentYear = new Date().getFullYear();

    // Transform to BE for display
    function toBEYear(year) {
        var beBound = currentYear + (adjYear / 2);
        if (year >= beBound) {
        year -= adjYear;
        }

        if (year < beBound) {
        year += adjYear;
        }

        return year;
    }

    // Transform to CE for calculate
    function toCEYear(year) {
        var beBound = currentYear + (adjYear / 2);
        if (year >= beBound) {
        year -= adjYear;
        }

        return year;
    }

    // Inherit DPGlobal from bootstrap-datepicker
    var _parentDPGlobal_ = $.extend({}, DPGlobal);
    $.extend(DPGlobal, {
        parseDate: function (date, format, language, assumeNearby) {

            var formats = format
                , parts = date && date.match(this.nonpunctuation) || [];

            if (typeof formats === 'string') {
                formats = DPGlobal.parseFormat(format);
            }
            if (parts.length == formats.parts.length) {
                var separators = $.extend([], formats.separators)
                , modDate = [];

                for (var i = 0, cnt = formats.parts.length; i < cnt; i++) {
                if (~['yyyy', 'yy'].indexOf(formats.parts[i])) {
                    parts[i] = '' + toCEYear(parseInt(parts[i], 10));
                }

                if (separators.length) {
                    modDate.push(separators.shift());
                }

                modDate.push(parts[i])
                }

                date = modDate.join('');

                return _parentDPGlobal_.parseDate.call(this, date, format, language, assumeNearby);
            }
        },
        formatDate: function (date, format, language) {

            var childFormatDate = _parentDPGlobal_.formatDate.call(this, date, format, language);

            var formats = format
                , parts = childFormatDate && childFormatDate.match(this.nonpunctuation) || []
                , trnfrm = {
                yy: toBEYear(date.getUTCFullYear()).toString().substring(2)
                , yyyy: toBEYear(date.getUTCFullYear()).toString()
            };

            if (typeof formats === 'string') {
                formats = DPGlobal.parseFormat(format);
            }
            
            if (parts.length == formats.parts.length) {
                var separators = $.extend([], formats.separators)
                , modDate = [];

                for (var i = 0, cnt = formats.parts.length; i < cnt; i++) {
                    if (separators.length) {
                        modDate.push(separators.shift())
                    }

                    modDate.push(trnfrm[formats.parts[i]] || parts[i])
                }
                childFormatDate = modDate.join('')
            }

            return childFormatDate;
        }
    });

    // Inherit DatePicker from bootstrap-datepicker
    var DatePicker = $.fn.datepicker.Constructor;
    var _parentDatePicker_ = $.extend({}, DatePicker.prototype);

    $.extend(DatePicker.prototype, {
        fill: function () {
            var d = new Date(this.viewDate);
                this.viewDate.setUTCFullYear(toCEYear(d.getUTCFullYear()));
                _parentDatePicker_.fill.call(this);

            var yearTitle = this.picker.find('.datepicker-months')
                .find('.datepicker-switch');

            if (parseInt(yearTitle.text()) > 1000) {
                yearTitle.text(
                    toBEYear(parseInt(yearTitle.text()))
                );
            }
        },
        _fill_yearsView: function (selector, cssClass, factor, step, currentYear, startYear, endYear, callback) {

            currentYear = toBEYear(currentYear);
            startYear = toBEYear(startYear);
            endYear = toBEYear(endYear);

            _parentDatePicker_._fill_yearsView.call(this, selector, cssClass, factor, step, currentYear, startYear, endYear, callback);
        }
    });

    (jQuery);
    
</script>