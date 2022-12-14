String.prototype.ChangeCharsToSave = function(_string) {
    const Entities = new Map([
        [34,'~apo~'],
        [42,'~star~'],
        [47,'~slash~'],
        [58,'~2dot~'],
        [60,'~lthan~'],
        [62,'~gthan~'],
        [63,'~ask~'],
        [92,'~bslash~'],
        [124,'~pipe~']
    ]);
    const ForbiddenChars = [34, 42, 47, 58, 60, 62, 63, 92, 124];

    for(let i=0; i<_string.length; i++) {
        for(let j=0; j<ForbiddenChars.length; j++) {
            if(_string.charCodeAt(i)==ForbiddenChars[j]) {
                _string = _string.replace(_string[i], Entities.get(_string.charCodeAt(i)))
                console.log(Entities[34])
            }
        }
    }
    return _string;    
};

//34 42 47 58 60 62 63 92 124