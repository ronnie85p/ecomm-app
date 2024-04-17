const _getLog = (...defArgs) => {
    return (...args) => {
        console.log.apply(console, [...defArgs, ...args]);
    };
}

export { _getLog }