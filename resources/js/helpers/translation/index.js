export function trans(str) {
    if (
        typeof window !== 'undefined'
        &&
        typeof window.translations !== 'undefined'
        &&
        typeof window.translations[str] !== 'undefined'
    ) {
        return window.translations[str];
    } else {
        console.error('Could not translate str: "' + str + '"');
    }

    return str;
}
