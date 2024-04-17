const buildLinks = (links, uri, options) => {
    const res = [];

    let path = '';
    for (let component of new Set(uri.split('/'))) {
        path += path == '/' ? component : '/' + component;

        let link = links.find(v => v.uri == path);
        if (link) {
            const current = path === uri;
            if (options?.excludeCurrent === true && current) {
                continue;
            }

            res.push({
                current,
                ...link
            });
        }
    }

    return res;
}

export default buildLinks;