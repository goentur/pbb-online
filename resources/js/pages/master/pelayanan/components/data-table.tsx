import LoadingData from '@/components/data-table/loading-data'
import NoData from '@/components/data-table/no-data'
import { Badge } from '@/components/ui/badge'
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import { Gate } from '@/types'
import { BadgeCheckIcon, BadgeX, BadgeXIcon, Ellipsis, Pencil } from 'lucide-react'

type DataTableProps = {
    gate: Gate
    loading: boolean
    data: []
    from: number
    setForm: React.Dispatch<React.SetStateAction<boolean>>
    setIsEdit: React.Dispatch<React.SetStateAction<boolean>>
    setData: React.Dispatch<React.SetStateAction<any>>
    setHapus: React.Dispatch<React.SetStateAction<boolean>>
}

export default function DataTable({
    gate,
    loading,
    data,
    from,
    setForm,
    setIsEdit,
    setData,
    setHapus,
}: DataTableProps) {
    return (
        <table className="w-full text-left border-collapse border text-[13px]">
            <thead>
                <tr className="uppercase text-sm leading-normal">
                    <th className="p-2 border w-1">NO</th>
                    <th className="p-2 border">Nama</th>
                    <th className="p-2 border">Keterangan</th>
                    <th className="p-2 border w-1 whitespace-nowrap">Url</th>
                    <th className="p-2 border w-1 whitespace-nowrap">Status TTE</th>
                    <th className="p-2 border w-1">Aksi</th>
                </tr>
            </thead>
            <tbody className="font-light">
                {loading && <LoadingData colSpan={5}/>}
                {data.length > 0 ? (
                    data.map((value: any, index: number) => (
                        <tr
                            key={index}
                            className="hover:bg-gray-100 dark:hover:bg-slate-900"
                        >
                            <td className="px-2 py-1 border text-center">{from++}</td>
                            <td className="px-2 py-1 border">{value.nama}</td>
                            <td className="px-2 py-1 border">{value.keterangan}</td>
                            <td className="px-2 py-1 border">{value.url}</td>
                            <td className="px-2 py-1 border">
                                <Badge
                                variant="secondary"
                                className={`text-white ${value.tte?.color}` }
                                >
                                    {value.tte?.status ? <BadgeCheckIcon /> : <BadgeXIcon/>}
                                    {value.tte?.label}
                                </Badge>
                            </td>
                            <td className="border text-center">
                                <DropdownMenu>
                                    <DropdownMenuTrigger className='px-2 py-1 cursor-pointer'><Ellipsis/></DropdownMenuTrigger>
                                    <DropdownMenuContent align='end'>
                                        {gate.update && <DropdownMenuItem onClick={() => {setForm(true), setIsEdit(true), setData({ id:value.id, nama:value.nama, keterangan:value.keterangan, status:value.status, url:value.url, tte:value.tte.value, lampiran: value.lampiran || []})}}><Pencil/> Ubah</DropdownMenuItem>}
                                        {gate.delete && <DropdownMenuItem onClick={() => {setHapus(true), setData({id:value.id,})}}><BadgeX/> Hapus</DropdownMenuItem>}
                                    </DropdownMenuContent>
                                </DropdownMenu>
                            </td>
                        </tr>
                    ))
                ) : (!loading ?<NoData colSpan={5}/>: null)}
            </tbody>
        </table>
    )
}
