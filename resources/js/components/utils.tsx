export const alertApp = (e: any, type: 'error' | null = null) => {
    const message = e.props?.flash ?? e;
    const isObject = typeof message === 'object' && message !== null;
    const description = isObject ? message.success ?? message.error ?? 'Terjadi kesalahan pada saat proses data' : message;
    const isError = type === 'error' || (isObject && message.error);
    toast[isError ? 'error' : 'success'](isError ? 'Galat' : 'Selamat', { description });
};